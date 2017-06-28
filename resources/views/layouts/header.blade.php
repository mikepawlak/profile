<nav class="navbar navbar-right navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand branding" href="/"><b>&#60;mike/&#62;</b></a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item {{$page == "Languages" ? 'active': ''}}">
        <a class="nav-link" href="/languages">Languages</a>
      </li>
      <li class="nav-item {{$page == "Projects" ? 'active': ''}}">
        <a class="nav-link" href="/projects">Projects</a>
      </li>
      <li class="nav-item {{$page == "Requirements" ? 'active': ''}}">
        <a class="nav-link" href="/requirements">Requirements</a>
      </li>
      <li class="nav-item {{$page == "Contact" ? 'active': ''}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
