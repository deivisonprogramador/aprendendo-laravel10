


    document.getElementById("btnExcluir").addEventListener("click", confirmDelete);


    function confirmDelete(event) {
            event.preventDefault();

            Swal.fire({
            title: 'Você tem certeza?',
            text: 'Essa ação não pode ser desfeita!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
            // Enviar a solicitação de exclusão ao servidor
            const form = document.getElementById('excluirForm');
            form.submit();
        }
        });
}

