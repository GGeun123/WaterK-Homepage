<style>
.btn{
  width: 6rem;
  height: 6rem;
  background: rgb(72, 85, 124);
  position: fixed;
  bottom: 3rem;
  left: 5rem;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  border-radius: 50%;
  color: #fff;
}
.btn:hover {
  background-color: rgb(3, 50, 151);
  color: #fff;
}
.modal-body input{
  margin-bottom: 20px;
}
.modal-body .modal-content{
  height: 150px;
}
.modal-footer .btn-footer{
  width: 45%;
  border-radius: 10px;
  padding: 10px;
  font-size: 1.0rem;
  background-color: lightgray;
  border: 1px solid lightgray;
}
.btn-footer:hover{
  background-color: gray;
}
.modal-footer .btn-submit{
  width: 50%;
  border-radius: 10px;
  padding: 10px;
  font-size: 1.0rem;
  background-color: rgb(72, 85, 124);
  border: 1px solid rgb(72, 85, 124);
  color: #fff;
}
.btn-submit:hover{
  background-color: rgb(3, 50, 151);
  color: #fff;
}
</style>

<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-wechat" viewBox="0 0 16 16">
    <path d="M11.176 14.429c-2.665 0-4.826-1.8-4.826-4.018 0-2.22 2.159-4.02 4.824-4.02S16 8.191 16 10.411c0 1.21-.65 2.301-1.666 3.036a.324.324 0 0 0-.12.366l.218.81a.616.616 0 0 1 .029.117.166.166 0 0 1-.162.162.177.177 0 0 1-.092-.03l-1.057-.61a.519.519 0 0 0-.256-.074.509.509 0 0 0-.142.021 5.668 5.668 0 0 1-1.576.22ZM9.064 9.542a.647.647 0 1 0 .557-1 .645.645 0 0 0-.646.647.615.615 0 0 0 .09.353Zm3.232.001a.646.646 0 1 0 .546-1 .645.645 0 0 0-.644.644.627.627 0 0 0 .098.356Z"/>
    <path d="M0 6.826c0 1.455.781 2.765 2.001 3.656a.385.385 0 0 1 .143.439l-.161.6-.1.373a.499.499 0 0 0-.032.14.192.192 0 0 0 .193.193c.039 0 .077-.01.111-.029l1.268-.733a.622.622 0 0 1 .308-.088c.058 0 .116.009.171.025a6.83 6.83 0 0 0 1.625.26 4.45 4.45 0 0 1-.177-1.251c0-2.936 2.785-5.02 5.824-5.02.05 0 .1 0 .15.002C10.587 3.429 8.392 2 5.796 2 2.596 2 0 4.16 0 6.826Zm4.632-1.555a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0Zm3.875 0a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0Z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form" method="post" action="board_action.php">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">문의하기</h5>
        </div>
        <div class="modal-body">
          <input type="text" name="title" class="form-control" placeholder="제목">
          <input type="text" name="id" class="form-control" placeholder="이름">
          <input type="text" name="email" class="form-control" placeholder="이메일">
          <input type="text" name="tel" class="form-control" placeholder="연락처">
          <input type="text" name="content" class="form-control modal-content" placeholder="내용">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-footer" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn-submit">전송</button>
        </div>
      </form>
    </div>
  </div>
</div>