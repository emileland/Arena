let h = 0;
let m = 0;
let s = 0;
let hNow;
let mNow;
let sNow;
let time;

let realTime;
let fakeTime;
let useTime;

function fakeTime(){
    let inputFakeTime = document.getElementById("fakeTime");
    let startTime = document.getElementById('startTime');
    if(inputFakeTime.checked){
        useTime = startTime.value;
        tbStartDate = useTime.split(':');
        h = parseInt(tbStartDate[0]);
        m = parseInt(tbStartDate[1]);
        s = 0;
        incrDate()
    }
    else{
        clearTimeout(time);
    }

};

function incrDate(){
    console.log(h, m, s)
    s+=1;
    if(s>=60) {
        s = 0;
        m += 1;
        if (m >= 60) {
            m = 0;
            h += 1;
            if (h >= 24) {
                h = 0;
                m = 0;
                s = 0;
            }
        }
    }
    time = setTimeout(incrDate, 1)
}


function timeNow() {
    let today = new Date();
    hNow = today.getHours();
    mNow = today.getMinutes();
    sNow = today.getSeconds();
    mNow = checkTime(mNow);
    sNow = checkTime(sNow);
    hNow = checkTime(hNow);
    document.getElementById('timeNow').innerHTML = hNow+':'+mNow+':'+sNow;
    let t = setTimeout(timeNow, 100);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function display(h,m,s){
    fakeTime[0] = h;
    fakeTime[1] = m;
    fakeTime[2] = s;
    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('displayTime').innerHTML = h+':'+m+':'+s;
}


timeNow();
fakeTime();


for (i in nowTime) {
    nowTime[i] = checkTime(nowTime[i]);
}