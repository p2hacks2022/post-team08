window.addEventListener('DOMContentLoaded', () => {
    // コンテナを指定
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
      section.appendChild(petalEl);
  
      // 一定時間が経てば花びらを消す
      setTimeout(() => {
        petalEl.remove();
      }, 5000);
    }

    
  
    // starを生成する間隔をミリ秒で指定
    setInterval(createPetal, 500);
  });