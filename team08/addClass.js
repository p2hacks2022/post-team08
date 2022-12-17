// const link = document.getElementById("came_true");
// link.addEventListener('click', e=>{});

// for(let i = 0; i < 5; i++){
//     link.dispatchEvent(new Event('click'));
// }

// function openGoogleByMethod(){
//     console.log("Even triggered");
// }


// 叶ったボタン
const true_btn = document.getElementById("came_true");
// 叶わなかったボタン
const false_btn = document.getElementById("came_false");
const color = document.getElementById("color");

true_btn.addEventListener('click', () =>{
    // すでにカードの色が変わっていた場合
    if(color.classList.contains('colored')){
        color.classList.remove('colored');
    }else{
    // カードの色が変わっていない場合
        color.classList.add('colored');
    }
})
