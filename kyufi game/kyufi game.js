
var coufiS = 85;
var coufiXpos;
var coufiXspeed = 4.3;
var coufiYpos;
var coufiVeloc;
var platWid = 50;
var platHei = 50;
var platN = 5;
var platTable = [];
var platTranslation = 0;
var start;
var score = 0;
var bestScore = 0;
var coufiImage;
var platImage;
var backgroundImage;
var font;

var sfx = {
    song: new Howl({
        src:"https://github.com/YoussefSahnoun/doodle-images/blob/main/%5Bno%20copyright%20music%5D%20cute%20&%20joyful%20music%20play%20with%20me%20%20cute%20bgm%20%20funny.mp3?raw=true",
        autoplay:true
    }),
    gameOver: new Howl({
        src:"https://github.com/YoussefSahnoun/doodle-images/blob/main/Funny%20GAME%20OVER%20%20Free%20Sound%20Effect.mp3?raw=true"
    }),
    jump: new Howl({
        src:"https://github.com/YoussefSahnoun/doodle-images/blob/main/Cartoon%20Jump%20Sound%20Effect.mp3?raw=true"
    })

}

function preload() {

    font=loadFont("SunnyspellsRegular-MV9ze.otf");
    backgroundImage = loadImage("https://raw.githubusercontent.com/YoussefSahnoun/doodle-images/main/image_2023-04-22_114920440.png");
    coufiImage= loadImage("https://raw.githubusercontent.com/YoussefSahnoun/doodle-images/main/doodler%20right.png");
    platImage = loadImage("https://raw.githubusercontent.com/YoussefSahnoun/doodle-images/main/doodle%20platform.png");
}

function setup() {
    frameRate(80);
    let canvas = createCanvas(400, 600);
    canvas.parent('game');
    start = false;
}

function draw() {
    background(247, 239, 231);
    image(backgroundImage, 0, 0, 400, 600);

    if(start == true) {
        fill(0)
        text("Score: " + score, 300, 50);
        drawPlat();
        drawCoufi();
        Collision();
        moveCoufi();
        screenUp();
    } else {
        textFont(font);
        fill(0);
        textSize(60);

        text("Click to Start !", 70, 250);
        textSize(40);
        text("Score: " + score, 150, 325);
        textSize(20);
        fill('red');
        text("High Score: " + bestScore, 155, 360);
    }
}

function screenUp() {
    if(coufiYpos < 600) {
        platTranslation = 3;
        coufiVeloc += 0.25;
    } else {
        platTranslation = 0;}

}

function mousePressedOnGame() {
    if(start == false) {
        score = 0;
        sfx.song.play();
        planPlatforms();
        coufiVeloc = 0.75;
        coufiYpos = 350;
        coufiXpos = platTable[platTable.length - 1].xPos + 15;

        start = true;
    }
}

function drawCoufi() {
    fill(204, 200, 52);
    image(coufiImage, coufiXpos, coufiYpos, coufiS, coufiS);
}

function moveCoufi() {
    coufiVeloc += 0.175;
    coufiYpos += coufiVeloc;
    if (keyIsDown(RIGHT_ARROW)) {
        coufiXpos += coufiXspeed;
    }
    if (keyIsDown(LEFT_ARROW)) {
        coufiXpos -= coufiXspeed;
    }

}
function planPlatforms() {
    for(var i=0; i < platN; i++) {
        var platGap = height / platN;
        var randomPlatPos = i * platGap;
        var plat = new Platform(randomPlatPos);
        platTable.push(plat);
    }
}

function drawPlat() {
    fill(106, 186, 40);
    platTable.forEach(function(plat) {
        plat.yPos += platTranslation;
        image(platImage, plat.xPos, plat.yPos, plat.width, plat.height);

        if(plat.yPos > 600) {
            score++;
            platTable.pop();
            var newPlat = new Platform(0);
            platTable.unshift(newPlat);
        }
    });
}

function Platform(randomPlatPos) {
    this.xPos = random(15, 350);
    this.yPos = randomPlatPos;
    this.width = platWid;
    this.height = platHei;
}

function Collision() {
    platTable.forEach(function(plat) {
        if(
            coufiXpos < plat.xPos + plat.width-30 &&
            coufiXpos + coufiS > plat.xPos+30 &&
            coufiYpos + coufiS < plat.yPos + plat.height &&
            coufiYpos + coufiS > plat.yPos &&
            coufiVeloc > 0

        ) {

            sfx.jump.play();
            coufiVeloc = -8;
        }
    });

    if(coufiYpos > height) {
        if(score > bestScore) {
            bestScore = score;
        }
        sfx.song.stop();
        sfx.gameOver.play();
        start = false;
        platTable = [];
    }

    if((coufiXpos + (coufiS/2)) > width) {
        coufiXpos = 0;
    }else if(coufiXpos < 0) {
    coufiXpos = width-(coufiS/2);}
}