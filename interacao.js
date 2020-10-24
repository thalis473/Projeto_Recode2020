      /*pagina produtos interaçao da lista com os itens */
      function
      lista(produtos) {

          let itens = document.getElementsByClassName('itens1');
          for (var i = 0; i < itens.length; i++) {
              console.log(itens[i].id);
             if (produtos == itens[i].id)
                  itens[i].style = "display:block";
              else
                  itens[i].style = "display:none"
          }
      }
      /* codigo para o filtro das categorias */
      let todos = () => {
          let itens = document.getElementsByClassName('itens1');
          for (var i = 0; i < itens.length; i++) {
              itens[i].style = "display:block";
          }
      }
      /* redirecionamento das imagens  da tela 'produtos' com o evento  (onmouseover)*/

      let destaque = (imagem) => {
          if (imagem.width == 100) {
              imagem.width = 400;
              imagem.height = 400;
          } else {
              imagem.width = 100;
              imagem.height = 100;
          }
      }
      /* redirecionamento das imagens 'index'  com um evento diferente (onmouseout)*/
      
      let imagem_produtos = (imagem) => {
          if (imagem.width == 100) {
              imagem.width = 200;
              imagem.height = 200;
          } else {
              imagem.width = 100;
              imagem.height = 100;
          }
      }

      /* pagina "contatos" damos uma mensagem de agradecimento ao usuario que
       preencher o formulario atravez da funçao (onclick)*/

      function enviar() {

          alert("Agradecemos pela colaboração!");

      };