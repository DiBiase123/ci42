<style {csp-style-nonce}>
  * {
    transition: background-color 300ms ease, color 300ms ease;
  }
  *:focus {
    background-color: rgba(0, 0, 180, .2); /* SFONDO INPUT FOCUS*/
    outline: none;
  }
  html, body {
    color: rgba(33, 37, 41, 1); /* COLOR TEXT*/
    /*font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";*/
    font-size: 1.2em;
    /*margin: 0;*/
    padding: 0;
    -webkit-font-smoothing: antialiased;
  /*	-moz-osx-font-smoothing: grayscale; */
    text-rendering: optimizeLegibility;
  }
  header {
    background-color: #2bbbab; /* background HEADER */
    padding: .4rem 0 0;
  }
  .menu {
    padding: .4rem 2rem;
  }
  header ul {
    border-bottom: 3px solid rgba(13, 110, 253, 1); /*LINEA HEADER*/
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    text-align: right;
  }
  header li {
    display: inline-block;
  }
  header li a {
    border-radius: 5px;
    color: rgba(0, 0, 0, 1); /* mMMMMm ? */
    display: block;
    height: auto;
    text-decoration: none;
  }
  header li.menu-item a {
    border-radius: 5px;
    margin: 5px 0;
    height: auto;
  /*	line-height: 36px; */
    padding: .4rem .65rem;
    text-align: center;
  }
  header li.menu-item a:hover,
  header li.menu-item a:focus {
    background-color: rgba(13, 110, 253, 1); /* MENU background OVER */
    color: rgba(255, 255, 255, 1);
    height: 60px;

  }
  header .logo {
    float: left;
    height: 75px;
    padding: .4rem .5rem;
  }
  header .menu-toggle {
    display: none;
    float: right;
    font-size: 2rem;
    font-weight: bold;
  }
  header .menu-toggle button {
    /*background-color: rgba(0, 255, 235, 1);*/
    border: none;
    border-radius: 3px;
    /*color: #ffffff;*/
    cursor: pointer;
    /*font: inherit;*/
    font-size: 1.3rem;
    height: 36px;
    padding: 0;
    margin: 11px 0;
    overflow: visible;
    width: 40px;
  }
  header .menu-toggle button:hover,

  header .menu-toggle button:focus {
    background-color: rgba(0, 255, 235, 0.2);
    color: rgba(255, 255, 255, .8);
  }
  header .heroe {
    margin: 0 auto;
    max-width: 1100px;
    padding: 1rem 1.75rem 1.75rem 1.75rem;
  }
  header .heroe h1 {
    font-size: 2.5rem;
    font-weight: 500;
  }
  header .heroe h2 {
    font-size: 1.5rem;
    font-weight: 300;
  }

  @media (max-width: 559px) {
    header ul {
      padding: 0;
    }
    header .menu-toggle {
      padding: 0 1rem;
    }
    header .menu-item {
      /*background-color: #00c851;*/
      border-top: 1px solid #00c851;
      margin: 0 15px;
      width: calc(100% - 30px);
    }
    header .menu-toggle {
      display: block;
    }
    header .hidden {
      display: none;
    }
    header li.menu-item a {
      background-color: rgba( 0, 255, 235, 1);
    }
    header li.menu-item a:hover,
    header li.menu-item a:focus {
      background-color: #08e5ff; /* BG COLOR MENU RIMPICCIOLITO */
      color: #ffffff; /* COLORE TESTO  MENU RIMPICCIOLITO */
      border:3px solid ;
      border-color: #0d6efd;
    }
  }
</style>

<header>

<div class="menu ">
  <ul>

    <li class="logo shadow p-2 mb-2 bg-primary rounded">
      <a href="https://noframe.dev.accatone.net/assistants/giuliano.di-biase/ci4/public/index.php/Ultimate">
        <!--	<img height="44" title="Chari ID Logo" alt="logo CHAR" src="# "> -->
        <p class="text-white fw-bolder fs-2 text-center " >CHAR-ID
          <span class="badge bg-info p-2 text-dark fs-5 text-center" >.1.0.1</span>
        </p>
     </a>
    </li>

    <li class="menu-toggle"><button class="btn btn-primary" onclick="toggleMenu();">&#9776;</button></li>
    <li class="menu-item hidden"><a href="Ultimate/index.php';">Home</a></li>
    <li class="menu-item hidden"><a href="Blog">Blog</a></li>
    <li class="menu-item hidden"><a href="#" target="_blank">About</a></li>
    <li class="menu-item hidden"><a href="#" target="_blank">Contact</a></li>

    <li class="menu-item hidden " type="button">
        <a href="#" target="" class="btn btn-info" >
        <svg xmlns="http://www.w3.org/2000/svg" width="2em"  fill="currentColor" class="bi bi-person text-white" viewBox="0 0 16 16">


          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>

        </svg>Sign-In
        </a>
    </li>

  </ul>
</div>

<!--	<div class="heroe">

  <h1>Welcome to CodeIgniter  <?//= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>

  <h2>The small framework with powerful features</h2>

</div> -->

</header>


<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>
