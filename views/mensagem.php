<?php if (isset($_GET["mensagem"]) && isset($_GET["tipo"])): ?>

    <div class="alert alert-<?php echo htmlspecialchars($_GET["tipo"]); ?> alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars($_GET["mensagem"]); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>

<?php endif; ?>