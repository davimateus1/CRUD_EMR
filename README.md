
<h1 align="center"> Cadastro de Funcionários EMR </h1>

<br> <br>

## ✨ Tecnologias utilizadas

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP](https://www.php.net)
- [CSS3](https://www.w3schools.com/css/)
- [HTML5](https://www.devmedia.com.br/o-que-e-o-html5/25820)
- [Bootstrap](https://getbootstrap.com.br)
- [MySQL](https://www.mysql.com)

<br>
<br>

## 💻 Projeto

O projeto consiste em uma aplicação de cadastro de funcionários conectada a um banco de dados, você pode fazer qualquer operação CRUD utilizando os dados de funcionários e observar essas alterações no seu banco de dados.

<br>
<br>

<h1 align="center"> Passo a passo de como executar o projeto </h1>
<div> 
  <h4> 1° Passo: </h4>
  <p> Instale a versão mais nova do XAMPP (8.0.12) clicando<a href="https://www.apachefriends.org/pt_br/index.html"> aqui</a>.</p>
  <h4> 2° Passo: </h4>
  <p> Após a instalação, vamos começar a configurar para o XAMPP ficar apto a rodar o projeto.</p>
  <p> Clique nos dois botões de start marcados abaixo:</p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138568922-cebb0e82-5b2c-4627-836e-c3421b571dcd.png" width="40%">
  </p>
  <h4> 3° Passo: </h4>
  <p> Clique na opção "Shell" mostrada na imagem abaixo:</p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138568651-f6220bd0-c32e-48b4-8a18-0d5e06c63b13.png" width="40%">
  </p>
  <h4> 4° Passo: </h4>
  <p> Agora, você vai digitar o seguinte comando no CMD que foi aberto:</p>
  <b> mysqladmin.exe -u root password root </b>
  <h4> 5° Passo: </h4>
  <p> Para executar essa parte, siga o passo a passo das fotos abaixo: </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569539-1a8c42a8-bfa2-4d44-ac3a-ac0e011083e7.png" width="40%">
  </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569542-c76b7a26-5ecc-479c-89d5-44e75abb0621.png" width="50%">
  </p>
  <p> Abra o arquivo com algum editor de texto, no meu caso, utilizei o VSCode. </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569543-fedcb5de-f65b-44be-8b21-7ad54e1e509b.png" width="50%">
  </p>
  <p> Por padrão, o password será vazio ('') coloque a palavra root entre as aspas ('root'). </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569546-dc002421-4dca-42b0-b5ce-4d71157f5f73.png" width="80%">
  </p>
  <h4> 6° Passo: </h4>
  <p> Nesse passo iremos configurar o MySQL, faça extamente TUDO IGUAL ao que irá se pedir a seguir: </p>
  <p> Com o APACHE e o MySQL startados, clique na opção "Admin". </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569724-c6cd31b4-1328-4d2d-abb1-c590185d50b9.png" width="40%">
  </p>
  <p>Crie um Banco de Dados com o nome "crudemr" igual mostrado na imagem abaixo: </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569780-05d529d3-32ee-439f-817a-6152c66d7642.png" width="40%">
  </p>
  <p> Ao criar o banco de dados, crie duas tabelas que serão denominadas dadosfunc e cargofunc, deve conter os campos a seguir EXATAMENTE IGUAIS (nome, valores e etc). </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569877-0c61933d-cfbd-4072-8f92-5bd70b0fa16b.png" width="40%">
  </p>
  <h4> PRIMEIRA TABELA - dadosfunc </h4>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569914-f37d9b16-b023-433f-81f1-384eef8afb81.png" width="80%">
  </p>
  <h4> SEGUNDA TABELA - cargofunc </h4>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138569956-f8773acf-8725-40b6-b464-9abcb6af2d0e.png" width="80%">
  </p>
  <h4> 7° Passo: </h4>
  <p> Neste passo, iremos começar a rodar o projeto. </p>
  <p> Primeiro baixe o projeto pelo repositório ou pelo ZIP enviado via email, faça a extração da pasta em algum lugar e siga o passo a passo: </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138570169-ee0bef59-f89f-41a2-9b94-bdbfa13a4f4e.png" width="40%">
  </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138570208-aec6b4a8-a923-4840-baa8-cda141266ecb.png" width="80%">
  </p>
  <h4> AO ABRIR A PASTA, REMOVA ESSES ARQUIVOS QUE NÃO ESTÃO CONTIDOS EM PASTAS, PARA EVITAR PROBLEMAS. </h4>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138570218-99e3b69b-224b-4603-b416-0f183b96661a.png" width="40%">
  </p>
  <h4> Mova a pasta do projeto (emrcrud) para dentro da htdocs.</h4>
   <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138570258-1dcc4db3-7fc6-4c3a-8054-dc6a7f707b12.png" width="40%">
  </p>
  <h4> 8° Passo: </h4>
  <p> Chegou a hora de executar o projeto, para isso, siga os últimos passos: </p>
  <p> Com o APACHE e o MySQL ativos no XAMPP, digite o nome localhost na sua barra de pesquisa do navegador.</p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138570395-cba83c5c-2e46-45c4-ae72-fe61970ea9d8.png" width="40%">
  </p>
  <p> Ao clicar na pasta emrcrud você deverá ver essa tela: </p>
  <p>
  <img alt="Happy" src="https://user-images.githubusercontent.com/66326378/138570424-4295fa8d-bec4-42dd-bd10-cbf4df79bf34.png" width="80%">
  </p>
  <h3 align="center"> Pronto! agora basta testar as funcionalidades da aplicação e ver os dados sendo Gravados, alterados ou apagados no banco de dados MySQL.</h3>
</div>
