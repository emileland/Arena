let useTime = [];
let fakeTime = [12,0,0];
let nowTime = [];
let stringUseTime = [];
let stringFakeTime = [];
let stringNowTime = [];
let speed = 1;

function time(){
    let input = document.getElementById('fakeTime');
    timeNow();
    timeIntToString();
    if(input.checked){
        useTime = fakeTime;
    }
    else{
        useTime = nowTime;
    }
    document.getElementById('displayTime').innerHTML = stringUseTime[0]+':'+stringUseTime[1]+':'+stringUseTime[2];
    setTimeout(time, 1);
}

function timeNow(){
    let today = new Date;
    nowTime[0] = today.getHours();
    nowTime[1] = today.getMinutes();
    nowTime[2] = today.getSeconds();
    document.getElementById('timeNow').innerHTML = stringNowTime[0]+':'+stringNowTime[1]+':'+stringNowTime[2];
}

function timeFake(){
    let input = document.getElementById('fakeTime');
    let startTime = document.getElementById('startTime');
    if(input.checked){
        startTime = startTime.value;
        if(startTime == ''){
            fakeTime = [12,0,0];
        }
        else {
            fakeTime = startTime.split(':');
            fakeTime[0] = parseInt(fakeTime[0]);
            fakeTime[1] = parseInt(fakeTime[1]);
            fakeTime[2] = 0;
        }
    }
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function incrTimeFake(){
    fakeTime[2]+=1;
    if(fakeTime[2]>=60) {
        fakeTime[2] = 0;
        fakeTime[1] += 1;
        if (fakeTime[1] >= 60) {
            fakeTime[1] = 0;
            fakeTime[0] += 1;
            if (fakeTime[0] >= 24) {
                fakeTime[0] = 0;
                fakeTime[1] = 0;
                fakeTime[0] = 0;
            }
        }
    }
    setTimeout(incrTimeFake, 1000/speed);
}

function chooseSpeed(i){
    speed = i;
}

function timeIntToString(){
    for (i in fakeTime){
        stringFakeTime[i] = checkTime(fakeTime[i]);
    }
    for (i in nowTime){
        stringNowTime[i] = checkTime(nowTime[i]);
    }
    for (i in useTime){
        stringUseTime[i] = checkTime(useTime[i]);
    }
}

function timeFakeNow(){
    document.getElementById('startTime').value;
}

time();
incrTimeFake();