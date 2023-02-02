let target=document.querySelector("#dynamic");


//랜덤 string을 character별로 배열에 담아 return 하기 함수
function randomString(){
    let stringArr=["Learn to HTML", "Learn to CSS", "Learn to JavaScript", "Learn to JavaScript", "Learn to Pyton"];
    let selectString = stringArr[Math.floor(Math.random()*stringArr.length)];
    let selectStringArr = selectString.split("");
    return selectStringArr;
}

//타이핑 리셋
function resetTyping(){
    target.textContent="";
    dynamic(randomString());
}


//한 글자(character)씩 텍스트 출력 함수, 재귀함수 활용
function dynamic(randomArr){
    if(randomArr.length >0){
        target.textContent += randomArr.shift();
        setTimeout(function(){dynamic(randomArr);},80)
    } else {
        setTimeout(resetTyping, 3000);
    }
}

dynamic(randomString());

//커서 깜빡임 효과주기
function blink(){
    target.classList.toggle("active");
}
setInterval(blink, 500);



