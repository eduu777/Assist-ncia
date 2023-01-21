///////query modal responder orçamentos ///////////////////
          var editModal = document.getElementById('editModal')
          editModal.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget
          // Extract info from data-bs-* attributes
          var recipientcod = button.getAttribute('data-bs-whatever');
          var recipientnome = button.getAttribute('data-bs-whatevernome');
          var recipientemail = button.getAttribute('data-bs-whateveremail');
          var recipientacesso = button.getAttribute('data-bs-whateveracesso');
          var recipientsenha = button.getAttribute('data-bs-whateversenha');
          var recipientfoto = button.getAttribute('data-bs-whateverfoto');
          var recipientrua = button.getAttribute('data-bs-whateverrua');
          var recipienttel = button.getAttribute('data-bs-whatevertel');
          var recipientnum = button.getAttribute('data-bs-whatevernum');
          var recipientcomp = button.getAttribute('data-bs-whatevercomp');
          var recipientbairro = button.getAttribute('data-bs-whateverbairro');
          var recipientponto = button.getAttribute('data-bs-whateverponto');
          // If necessary, you could initiate an AJAX request here
          // and then do the updating in a callback.
          //
          // Update the modal's content.
          var modalTitle = editModal.querySelector('.modal-title')
          var modal = $(this)

          modalTitle.textContent = 'Editar usuário: ' + recipientcod
          modal.find('#recipient-cod').val(recipientcod)
          modal.find('#recipient-name').val(recipientnome)
          modal.find('#recipient-email').val(recipientemail)
          modal.find('#recipient-acesso').val(recipientacesso)
          modal.find('#recipient-senha').val(recipientsenha)
          modal.find('#recipient-foto').val(recipientfoto)
          modal.find('#recipient-rua').val(recipientrua)
          modal.find('#recipient-tel').val(recipienttel)
          modal.find('#recipient-num').val(recipientnum)
          modal.find('#recipient-comp').val(recipientcomp)
          modal.find('#recipient-bairro').val(recipientbairro)
          modal.find('#recipient-ponto').val(recipientponto)
        
        })


        var deletarModal = document.getElementById('deletarModal')
        deletarModal.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget
          // Extract info from data-bs-* attributes
          var recipientcod = button.getAttribute('data-bs-whatever');
          
          var modalTitle = deletarModal.querySelector('.modal-title')
          var modal = $(this)

          modalTitle.textContent = 'Excluir usuário: ' + recipientcod
          modal.find('#recipient-cod').val(recipientcod)
        })

        var deletarErroModal = document.getElementById('deletarErroModal')
        deletarErroModal.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget
          // Extract info from data-bs-* attributes
          var recipientcod = button.getAttribute('data-bs-whatever');
          
          var modalTitle = deletarErroModal.querySelector('.modal-title')
          var modal = $(this)

          modalTitle.textContent = 'Excluir usuário: ' + recipientcod
          modal.find('#recipient-cod').val(recipientcod)
        })


        function mostrarsenha(){
          var tipo = document.getElementById("senha");
          var icon = document.getElementById("btnmostsenha");
          if (tipo.type == "password") {
            tipo.type = "text";
            icon.className = "bi bi-eye-slash";
          }
          else{
            tipo.type = "password";
            icon.className = "bi bi-eye";
          }
        }

        function mostrarsenha2(){
          var tipo = document.getElementById("senha2");
          var icon = document.getElementById("btnmostsenha2");
          if (tipo.type == "password") {
            tipo.type = "text";
            icon.className = "bi bi-eye-slash";
          }
          else{
            tipo.type = "password";
            icon.className = "bi bi-eye";
          }
        }

   
