<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Log Out</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><i class="fa fa-question-circle"></i>Apakah Anda yakin ingin keluar? <br /></p>
                <div class="actionsBtns d-flex justify-content-center">
                    <form action="proseslogout.php" method="post">
                        <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}" />
                        <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Keluar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>