<style>
@import url("https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css");

* {
  font-family: Pretendard;
  user-select: none;
}

.moveTopBtn {
  width: 6rem;
  height: 6rem;
  background: #000;
  position: fixed;
  bottom: 3rem;
  right: 5rem;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  border-radius: 50%;
  transition: .2s;
  color: #fff;
}

.moveTopBtn:hover {
  color: #000;
  background-color: aquamarine;
}
</style>

<div class="moveTopBtn">맨 위로</div>

<script>
  const $topBtn = document.querySelector(".moveTopBtn");

  // 버튼 클릭 시 맨 위로 이동
  $topBtn.onclick = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });  
  }

  // 처음에 페이지 하단으로 스크롤 위치 지정
  window.onload = () => {
    window.scrollTo({ top: document.body.scrollHeight });  
  }
</script>