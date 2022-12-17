// const { startDetecting } = require("react-native/Libraries/Utilities/PixelRatio");

// 星を降らせるところ
const star = document.getElementById("main_wrap");
// 叶ったボタン
const true_btn = document.getElementById("came_true");
// 叶わなかったボタン
const false_btn = document.getElementById("came_false");

const color = document.getElementById("color");


true_btn.addEventListener('click', () =>{
    // すでにカードの色が変わっていた場合
    if(!color.classList.contains('colored')){
        color.classList.add('colored');
        star.classList.add('cherry-blossom-container');
        
    }
})

false_btn.addEventListener('click', () =>{
    if(color.classList.contains('colored')){
        color.classList.remove('colored');
        star.classList.remove('cherry-blossom-container');
    }
})

true_btn.addEventListener('click', () => {
    const star_fall = document.getElementById('star_fall');
    const section = document.querySelector('.cherry-blossom-container');
  
    // starを生成する関数
    const createPetal = () => {
      const petalEl = document.createElement('span');
      petalEl.className = 'star';
      const minSize = 10;
      const maxSize = 50;
      const size = Math.random() * (maxSize + 1 - minSize) + minSize;
      petalEl.style.width = `${size}px`;
      petalEl.style.height = `${size}px`;
      petalEl.style.left = Math.random() * innerWidth + 'px';
      star_fall.appendChild(petalEl);
  
      // 一定時間が経てば花びらを消す
      setTimeout(() => {
        petalEl.remove();
      }, 5000);
    }

    // starを生成する間隔をミリ秒で指定
    setInterval(createPetal, 500);
  });