<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_1134bd1b2cfdeec41f470ff2123965ce193f9c8509349169e1118fb7cbff253f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<form method=\"post\">
    ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 17
        echo "
    
    
    

   

    ";
        // line 34
        echo "
  
<script src=\"https://kit.fontawesome.com/783b858c89.js\" crossorigin=\"anonymous\"></script>
<div class=\"sex\">
  <div class=\"card\">
    <div class=\"content\">
      <h2>Get Started!</h2>
      <div class=\"user\">
        <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        <i class=\"fas fa-user\"></i>
      </div>
      <div class=\"pass\">
        <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
        <i class=\"fas fa-lock\"></i>
         <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
      </div>
      <div class=\"else\">
        <input id=\"remember\" type=\"checkbox\">
        <label for=\"remember\">Remember me</label>
        <span>Forgot password?</span>
      </div>
      <input type=\"submit\" value=\"Login\">
    </div>
  </div>
</div>
</form>
<div class=\"instagram\">
<a href=\"https://www.instagram.com/mhmdali.hsen/\" target=\"_blank\">
<i class=\"fab fa-instagram\"></i></a>
  </div>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');



.sex {
    margin-bottom:150px;
    margin-top:30px;
  height: 60vh;
  width: 100%;
  background-color: #149ad1;
  position: relative;
  animation: left .75s ease-out;
}

.sex::after {
  background-color: #149ad1;
  width: 100%;
  height: 135px;
  position: absolute;
  content: \" \";
  bottom: -75px;
  transform: skewY(3.5deg);
}

.card {
  background-color: #fff;
  width: 400px;
  height: 450px;
  position: absolute;
  right: 25%;
  top: 19%;
  z-index: 100;
  border-radius: 40px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.25),
    inset -5px -5px 20px rgba(0,0,0,.25),
    inset 5px 5px 20px rgba(255,255,255,.25);
  animation: right .75s ease-in;
}

.content {
  display : flex;
  flex-direction: column;
  padding: 2em;
  align-items: flex-center;
  height: 100%;
  justify-items: space-between;
}

.user, .pass {
  position: relative;
  
}

.content i {
  position: absolute;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
  color: #149ad1;
  font-size: 1.125rem;
}

input[type=\"text\"], input[type=\"password\"] {
  font-size: 1.125rem;
  margin: .75em 0;
  width: 100%;
  border-radius: 100px;
  border: none;
  padding: .8em 1.5em .8em 2.75em;
  color: #149ad1;
  box-shadow: 1px 3px 10px #00000020,
    inset -1px -3px 10px #00000020,
    inset 1px 3px 10px #ffffff20;
}

input[type=\"text\"]::placeholder,
input[type=\"password\"]::placeholder{
  color: #0e4c6690;
  font-size: 1rem;
  margin-left: 1em;
}

input[type=\"text\"]:focus, input[type=\"password\"]:focus {
  outline: none;
}

h2 {
  margin: 1.5em;
  font-size: 2rem;
  text-align: center;
}

.else {
  display: flex;
  align-items: center;
  width: 85%;
  margin: .5em auto;
}

.else span {
  margin-left: auto;
}

.else span,
.else label {
  font-size: .75rem;
  text-align: right;
  opacity: .65;
  cursor: pointer;
  transition: 250ms;
}

.else label {
  margin-left: .5em;
}

span:hover,
label:hover{
  opacity: 100%;
  text-decoration: underline;
}

span:active,
label:active{
  transform: scale(.99);
}

input[type=\"submit\"] {
  background-color: #149ad1;
  border: none;
  color: #fff;
  padding: 1.1em 2.5em;
  border-radius: 100px;
  margin: 1.2em auto;
  cursor: pointer;
  box-shadow: 2px 3px 10px rgba(0,0,0,.25),
  inset -2px -3px 10px rgba(0,0,0,.35),
  inset 2px 3px 10px rgba(255,255,255,.5);
  letter-spacing: 1.25px;
}

input[type=\"submit\"]:hover {
  background: #34a1ce;
}

input[type=\"submit\"]:active {
    box-shadow: 2px 3px 10px rgba(0,0,0,.25),
  inset -2px -3px 10px rgba(255,255,255,.35),
  inset 2px 3px 10px rgba(0,0,0,.25);
}

input[type=\"submit\"]:focus {
  outline: none;
}


section::before {
  background-color: #fff;
  width: 100%;
  height: 250px;
  position: absolute;
  content: \" \";
  top: -100px;
  transform: skewY(-3.5deg);
}

.fa-instagram {
position: absolute;
  color: #149ad1;
  bottom: 20%;
  left: 20%;
  font-size: 1.5rem;
  transition: 300ms;
}

.instagram:hover .fa-instagram {
  color: #149ad195;
}

@keyframes right{
  0% {
    transform: translateX(700%)
  }
  100% {
    transform: translateX(0)
  }
}

@keyframes left{
  0% {
    transform: translateX(-100%)
  }
  100% {
    transform: translateX(0)
  }
}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  136 => 43,  125 => 34,  116 => 17,  108 => 14,  105 => 13,  103 => 12,  100 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}

<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    
    
    

   

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}

  
<script src=\"https://kit.fontawesome.com/783b858c89.js\" crossorigin=\"anonymous\"></script>
<div class=\"sex\">
  <div class=\"card\">
    <div class=\"content\">
      <h2>Get Started!</h2>
      <div class=\"user\">
        <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        <i class=\"fas fa-user\"></i>
      </div>
      <div class=\"pass\">
        <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
        <i class=\"fas fa-lock\"></i>
         <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
      </div>
      <div class=\"else\">
        <input id=\"remember\" type=\"checkbox\">
        <label for=\"remember\">Remember me</label>
        <span>Forgot password?</span>
      </div>
      <input type=\"submit\" value=\"Login\">
    </div>
  </div>
</div>
</form>
<div class=\"instagram\">
<a href=\"https://www.instagram.com/mhmdali.hsen/\" target=\"_blank\">
<i class=\"fab fa-instagram\"></i></a>
  </div>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');



.sex {
    margin-bottom:150px;
    margin-top:30px;
  height: 60vh;
  width: 100%;
  background-color: #149ad1;
  position: relative;
  animation: left .75s ease-out;
}

.sex::after {
  background-color: #149ad1;
  width: 100%;
  height: 135px;
  position: absolute;
  content: \" \";
  bottom: -75px;
  transform: skewY(3.5deg);
}

.card {
  background-color: #fff;
  width: 400px;
  height: 450px;
  position: absolute;
  right: 25%;
  top: 19%;
  z-index: 100;
  border-radius: 40px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.25),
    inset -5px -5px 20px rgba(0,0,0,.25),
    inset 5px 5px 20px rgba(255,255,255,.25);
  animation: right .75s ease-in;
}

.content {
  display : flex;
  flex-direction: column;
  padding: 2em;
  align-items: flex-center;
  height: 100%;
  justify-items: space-between;
}

.user, .pass {
  position: relative;
  
}

.content i {
  position: absolute;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
  color: #149ad1;
  font-size: 1.125rem;
}

input[type=\"text\"], input[type=\"password\"] {
  font-size: 1.125rem;
  margin: .75em 0;
  width: 100%;
  border-radius: 100px;
  border: none;
  padding: .8em 1.5em .8em 2.75em;
  color: #149ad1;
  box-shadow: 1px 3px 10px #00000020,
    inset -1px -3px 10px #00000020,
    inset 1px 3px 10px #ffffff20;
}

input[type=\"text\"]::placeholder,
input[type=\"password\"]::placeholder{
  color: #0e4c6690;
  font-size: 1rem;
  margin-left: 1em;
}

input[type=\"text\"]:focus, input[type=\"password\"]:focus {
  outline: none;
}

h2 {
  margin: 1.5em;
  font-size: 2rem;
  text-align: center;
}

.else {
  display: flex;
  align-items: center;
  width: 85%;
  margin: .5em auto;
}

.else span {
  margin-left: auto;
}

.else span,
.else label {
  font-size: .75rem;
  text-align: right;
  opacity: .65;
  cursor: pointer;
  transition: 250ms;
}

.else label {
  margin-left: .5em;
}

span:hover,
label:hover{
  opacity: 100%;
  text-decoration: underline;
}

span:active,
label:active{
  transform: scale(.99);
}

input[type=\"submit\"] {
  background-color: #149ad1;
  border: none;
  color: #fff;
  padding: 1.1em 2.5em;
  border-radius: 100px;
  margin: 1.2em auto;
  cursor: pointer;
  box-shadow: 2px 3px 10px rgba(0,0,0,.25),
  inset -2px -3px 10px rgba(0,0,0,.35),
  inset 2px 3px 10px rgba(255,255,255,.5);
  letter-spacing: 1.25px;
}

input[type=\"submit\"]:hover {
  background: #34a1ce;
}

input[type=\"submit\"]:active {
    box-shadow: 2px 3px 10px rgba(0,0,0,.25),
  inset -2px -3px 10px rgba(255,255,255,.35),
  inset 2px 3px 10px rgba(0,0,0,.25);
}

input[type=\"submit\"]:focus {
  outline: none;
}


section::before {
  background-color: #fff;
  width: 100%;
  height: 250px;
  position: absolute;
  content: \" \";
  top: -100px;
  transform: skewY(-3.5deg);
}

.fa-instagram {
position: absolute;
  color: #149ad1;
  bottom: 20%;
  left: 20%;
  font-size: 1.5rem;
  transition: 300ms;
}

.instagram:hover .fa-instagram {
  color: #149ad195;
}

@keyframes right{
  0% {
    transform: translateX(700%)
  }
  100% {
    transform: translateX(0)
  }
}

@keyframes left{
  0% {
    transform: translateX(-100%)
  }
  100% {
    transform: translateX(0)
  }
}
  </style>
{% endblock %}
", "security/login.html.twig", "/opt/lampp/htdocs/gestioncinema/templates/security/login.html.twig");
    }
}
