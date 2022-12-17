

// 叶ったボタン
const true_btn = document.getElementById("came_true");
// 叶わなかったボタン
const false_btn = document.getElementById("came_false");
const color = document.getElementById("color");

true_btn.addEventListener('click', () =>{
    // すでにカードの色が変わっていた場合
    if(!color.classList.contains('colored')){
        color.classList.add('colored');
    }
    // else{
    // カードの色が変わっていない場合
        // color.classList.add('colored');
    // }
})

false_btn.addEventListener('click', () =>{
    if(color.classList.contains('colored')){
        color.classList.remove('colored');
    }
})
