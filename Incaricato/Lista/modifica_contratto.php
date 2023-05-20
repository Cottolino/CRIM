<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Sidebars · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Mochiy+Pop+P+One&family=Montserrat+Alternates:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    

    


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    <style>
      body
      {
        font-family: 'Architects Daughter', cursive !important;
        font-family: 'Mochiy Pop P One', sans-serif !important;
        font-family: 'Montserrat Alternates', sans-serif !important
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="http://localhost/crim/Incaricato/CSS/sidebars.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
  </symbol>
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </symbol>
  <symbol id="chat-quote-fill" viewBox="0 0 16 16">
    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
  </symbol>
  <symbol id="cpu-fill" viewBox="0 0 16 16">
    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
  </symbol>
  <symbol id="gear-fill" viewBox="0 0 16 16">
    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
  </symbol>
  <symbol id="toggles2" viewBox="0 0 16 16">
    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
  </symbol>
  <symbol id="tools" viewBox="0 0 16 16">
    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
  <symbol id="geo-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
  </symbol>
</svg>

<main class="d-flex flex-nowrap">
  <h1 class="visually-hidden">Sidebars examples</h1>



  <?php
  include('../navbar.php');
  ?>

  <div class="container">

  <form class="input-group mt-2" action="http://localhost/crim/Incaricato/Ricerca/ricerca.php" method="post">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="keyword" />
  <button type="submit" class="btn btn-outline-primary">search</button>
</form>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-5 d-flex justify-content-center">
    <li class="breadcrumb-item"><a href="https://crimbeta.it">Home</a></li>
    <li class="breadcrumb-item"><a href="https://crimbeta.it/CRIM3/Incaricato/Lista/lista2.php">Lista</a></li>
    <li class="breadcrumb-item"><a href="https://crimbeta.it/CRIM3/Incaricato/Lista/modifica_contratto.php">Modifica</a></li>
  </ol>
</nav>


<div class="jumbotron">
    <h3 class="m-5 d-flex justify-content-center">Modifica contratto</h3>
    </div>
<?php
error_reporting(E_ERROR | E_PARSE);
include('../db_connection.php');

$sql = "SELECT * FROM join3 WHERE contratto_id=?";

$stmt= $db->prepare($sql);
$stmt->execute([$_GET['id']]);
foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
{
    //$id = $row['contratto_id_locatario'];
    //$str = "visualizza_locatario.php?id=".$id;
    $result = $row;
?>

<?php
}
//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);
//var_dump($row);
//echo $row['contratto_stato'];
?>
<form action="modifica_contratto_action.php" method="POST">
<div class="tab">
    <div class="riga">
        <div class="item">
            <label for="">Contratto ID</label>
            <input class="form-control" type="text" name="contratto_id" id="contratto_id" value="<?php echo $row['contratto_id'] ? : "NaN"; ?>" >
        </div>
        <div class="item">
            <label for="">User ID</label>
            <input class="form-control" name="incaricato" type="text" value="<?php echo $row['contratto_id_user'] ? : "NaN"; ?>"  >
        </div>
        <div class="item">
            <label for="">Locatario ID</label>
            <!-- <input class="form-control" type="text" name="" id="" value=<?php echo $row['contratto_id_locatario'] ? : "NaN"; ?> > -->
            <select name="loc_id" id="loc_id" class="form-control">
              <?php
                  $sql2 = "SELECT * FROM locatari";
                  $stmt2 = $db->prepare($sql2);
                  $stmt2->execute([]);
                  foreach($stmt2->fetchAll(PDO::FETCH_ASSOC) as $row)
                  {
                      echo "<option class='form-control' value='".$row['locatario_id']."'";
                      echo $row['locatario_id']==$result['contratto_id_locatario'] ? ' selected' : '';
                      echo ">".$row['locatario_id']."</option>";
                  }
              ?>
            </select>
        </div>
        <div class="item">
            <label for="">Conduttore ID</label>
            <!-- <input class="form-control" type="text" name="" id="" value=<?php echo $row['contratto_id_conduttore'] ? : "NaN"; ?> > -->
            <select name="cond_id" id="cond_id" class="form-control">
              <?php
                  $sql3 = "SELECT * FROM conduttori";
                  $stmt3 = $db->prepare($sql3);
                  $stmt3->execute([]);
                  foreach($stmt3->fetchAll(PDO::FETCH_ASSOC) as $row)
                  {
                      echo "<option class='form-control' value='".$row['conduttore_id']."'";
                      echo $row['conduttore_id']==$result['contratto_id_conduttore'] ? ' selected' : '';
                      echo ">".$row['conduttore_id']."</option>";
                  }
              ?>
            </select>
        </div>
    </div>
    <div class="riga">
        <div class="item">
            <label for="">Stato Contratto</label>
            <select class="form-control" name="stato" id=""  >
                <option value="0" <?php echo $row['contratto_stato']==0 ? 'selected' : '' ?> >Sospeso</option>
                <option value="1" <?php echo $row['contratto_stato']==1 ? 'selected': '' ?>>Accordato</option>
                <option value="2" <?php echo $row['contratto_stato']==2 ? 'selected': '' ?>>Richiesta di recesso anticipato del conduttore</option>
                <option value="3" <?php echo $row['contratto_stato']==3 ? 'selected': '' ?>>Richiesta di recesso anticipato del locatore</option>
                <option value="4" <?php echo $row['contratto_stato']==4 ? 'selected': '' ?>>Esitnto regolarmente</option>
                <option value="5" <?php echo $row['contratto_stato']==5 ? 'selected':'' ?>>Solecito di pagamento</option>
                <option value="6" <?php echo $row['contratto_stato']==6 ? 'selected':'' ?>>Richiesta di sfratto per morosita</option>
                <option value="7" <?php echo $row['contratto_stato']==7 ? 'selected':'' ?>>Sentenza di sfratto per morosita</option>
                <option value="9" <?php echo $row['contratto_stato']==9 ? 'selected':'' ?>>Conciliazione risolutiva del contratto</option>
            </select>
        </div>
        <div class="item">
            <label for="">Tipo Contratto</label>
            <select class="form-control" name="tipo" id="" value=<?php echo $row['contratto_tipo'] ? : "NaN"; ?>>
          
                <option value="0" <?php echo $row['contratto_tipo']==0 ? 'selected' : '' ?> >Contratto ad uso abitativo a canone libero</option>
                <option value="1" <?php echo $row['contratto_tipo']==1 ? 'selected' : '' ?>>Contratto ad uso abitativo a canone concordato</option>
                <option value="2" <?php echo $row['contratto_tipo']==2 ? 'selected' : '' ?>>Contratto ad uso commerciale</option>
                <option value="3" <?php echo $row['contratto_tipo']==3 ? 'selected' : '' ?>>Contratto ad uso transitorio</option>

            </select>
        </div>
        <div class="item">
            <label for="">Coobbligato1</label>
            <!-- <input class="form-control" type="text" name="" id="" value=<?php echo $row['contratto_coobbligato1'] ? : "NaN"; ?> > -->
            <select name="coobb1" id="coobb1" class="form-control">
              <?php
                  $sql4 = "SELECT * FROM coobbligati";
                  $stmt4 = $db->prepare($sql4);
                  $stmt4->execute([]);
                  foreach($stmt4->fetchAll(PDO::FETCH_ASSOC) as $row)
                  {
                      echo "<option class='form-control' value='".$row['coobbligati_id']."'";
                      echo $row['coobbligati_id']==$result['contratto_coobbligati1'] ? ' selected' : '';
                      echo ">".$row['coobligati_nome']." ".$row['coobbligati_cognome']."</option>";
                  }
              ?>
            </select>
        </div>
        <div class="item">
            <label for="">Coobbligato2</label>
            <!-- <input class="form-control" type="text" name="" id="" value=<?php echo $row['contratto_coobligato2'] ? : "NaN"; ?>> -->
            <select name="coobb2" id="coobb2" class="form-control">
              <?php
                  $sql5 = "SELECT * FROM coobbligati";
                  $stmt5 = $db->prepare($sql5);
                  $stmt5->execute([]);
                  foreach($stmt5->fetchAll(PDO::FETCH_ASSOC) as $row)
                  {
                      echo "<option class='form-control' value='".$row['coobbligati_id']."'";
                      echo $row['coobbligati_id']==$result['contratto_coobbligati2'] ? ' selected' : '';
                      echo ">".$row['coobligati_nome']." ".$row['coobbligati_cognome']."</option>";
                  }
              ?>
            </select>
        </div>
    </div>
    <div class="riga">
        <div class="item">
            <label for="">Incaricato</label>
            <input class="form-control" type="text" value="<?php echo $row['user_username']?>" disabled>
        </div>
        <div class="item">
            <label for="">Locatario</label>
            <input class="form-control" type="text" name="locatario_nome" id="locatario_nome" value="<?php echo $result['locatario_nome'] ? : "NaN"; ?>" >
        </div>
        <div class="item">
            <label for="">Conduttore</label>
            <input class="form-control" type="text" name="conduttore_nome" id="conduttore_nome" value="<?php echo $result['conduttore_nome'] ? : "NaN"; ?>" >
        </div>
        <div class="item">
            <label for="">Agenzia Entrate</label>
            <input class="form-control" type="text" name="agenzia_entrate" id="" value="<?php echo  $result['contratto_cod_agenzia_entrate']?>">
        </div>
    </div>
    <div class="riga">
        <div class="item">
            <label for="">Data inizio contratto</label>
            <input class="form-control" type="date" name="data_inizio" id="" value="<?php echo $result['contratto_data_inizio']?>" required></div>
        <div class="item">
            <label for="">Data fine contratto</label>
            <input class="form-control" type="date" name="data_fine" id="" value="<?php echo $result['contratto_data_fine'] ?>" required>
        </div>
        <div class="item">
            <label for="">Importo condominio</label>
            <input class="form-control" type="number" name="importo1" id="" value="<?php echo $result['contratto_importo_condominio']==null ? "0" : $result['contratto_importo_condominio'] ?>">
        </div>
        <div class="item">
            <label for="">Importo canone mensile</label>
            <input class="form-control" type="number" name="importo2" id="" value="<?php echo $result['contratto_importo_canone_mensile']==null ? "0" : $result['contratto_importo_canone_mensile'] ?>">
        </div>
    </div>
    <br>
    <p class='bold'>(*)La modifica è aplicabile solo ai seguenti campi: Locatario ID, Conduttore ID, Stato, Tipo, Coobbligati1, Coobbligato2, 
      Agenzia entrate, Data inizio, Data Fine, Importo Mensile, Importo Condominio
    </p>
    <br>
    <button type="submit" class="btn btn-primary form-control">INVIA</button>
    <br>
    <div class="back mt-5">
    <a href="" class="btn btn-danger">Torna Indietro</a>
  </div>
</div>

</div>
</form>
</body>

<script>
  $(document).ready(function () {
      $("#loc_id").change(function (e) { 
        e.preventDefault();
        var id = $("#loc_id").val();

        $.ajax({
                type: "POST",
                url: "update_loc.php",
                data: 
                {
                    id : id
                },
                dataType: "json",
                success: function (response) {
                    //$(this).parent().parent().remove();
                    console.log(response[0]['locatario_cognome']);
                    $("#locatario_nome").val(response[0]['locatario_cognome'])
                    //var $i = 
                    //$("tr.elemento-"+id.).remove();
                }
            });
        
      });

      $("#cond_id").change(function (e) { 
        e.preventDefault();
        var id = $("#cond_id").val();

        $.ajax({
                type: "POST",
                url: "update_cond.php",
                data: 
                {
                    id : id
                },
                dataType: "json",
                success: function (response) {
                    //$(this).parent().parent().remove();
                    console.log(response[0]['conduttore_cognome']);
                    $("#conduttore_nome").val(response[0]['conduttore_cognome'])
                    //var $i = 
                    //$("tr.elemento-"+id.).remove();
                }
            });
        
      });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="http://localhost/crim/Incaricato/CSS/sidebars.js"></script>
<?php
include('../footer.php');
?>
</html>


