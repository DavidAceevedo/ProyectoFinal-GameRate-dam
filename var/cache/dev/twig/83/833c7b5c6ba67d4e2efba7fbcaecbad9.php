<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* security/login.html.twig */
class __TwigTemplate_bb824a34db5e3518571ff7ebdb1d6012 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Iniciar Sesión - GameRate";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }

        body {
            background: radial-gradient(circle at bottom right, rgba(99, 102, 241, 0.05), transparent),
            #f3f4f6;
            min-height: 90vh;
        }

        .auth-card {
            border-radius: 25px !important;
            border: none;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .auth-header {
            background: var(--primary-gradient);
            border-radius: 25px 25px 0 0 !important;
            padding: 40px;
            text-align: center;
            color: white;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .btn-login {
            background: var(--primary-gradient);
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            transition: transform 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }

        .auth-footer {
            text-align: center;
            margin-top: 20px;
            color: #6b7280;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        yield "    <div class=\"container d-flex align-items-center justify-content-center\" style=\"min-height: 80vh;\">
        <div class=\"col-md-5\">
            <div class=\"card auth-card overflow-hidden\">
                <div class=\"auth-header\">
                    <h2 class=\"fw-bold mb-0\">🚀 ¡Hola de nuevo!</h2>
                    <p class=\"small mb-0 opacity-75\">Identifícate para valorar tus juegos</p>
                </div>

                <div class=\"card-body p-4 p-md-5\">
                    <form method=\"post\">
                        ";
        // line 79
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "                            <div class=\"alert alert-danger border-0 shadow-sm\" style=\"border-radius: 12px;\">
                                ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 81, $this->source); })()), "messageKey", [], "any", false, false, false, 81), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 81, $this->source); })()), "messageData", [], "any", false, false, false, 81), "security"), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 84
        yield "
                        ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                            <div class=\"alert alert-info border-0 text-center\" style=\"border-radius: 12px;\">
                                Ya estás identificado como <strong>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "userIdentifier", [], "any", false, false, false, 87), "html", null, true);
            yield "</strong><br>
                                <a href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-sm btn-outline-info mt-2\">Cerrar sesión</a>
                            </div>
                        ";
        }
        // line 91
        yield "
                        <div class=\"mb-4\">
                            <label for=\"inputEmail\" class=\"form-label fw-bold small text-uppercase\">Email</label>
                            <input type=\"email\" value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 94, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"tu@email.com\" autocomplete=\"email\" required autofocus>
                        </div>

                        <div class=\"mb-4\">
                            <label for=\"inputPassword\" class=\"form-label fw-bold small text-uppercase\">Contraseña</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"••••••••\" autocomplete=\"current-password\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                        <button class=\"btn btn-primary btn-login w-100 mt-2\" type=\"submit\">
                            Entrar al sistema 🕹️
                        </button>

                        <div class=\"auth-footer\">
                            <p class=\"mb-0 small\">
                                ¿No tienes cuenta?
                                <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-decoration-none fw-bold\" style=\"color: #6366f1;\">
                                    Regístrate aquí
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  254 => 111,  242 => 102,  231 => 94,  226 => 91,  220 => 88,  216 => 87,  213 => 86,  211 => 85,  208 => 84,  202 => 81,  199 => 80,  197 => 79,  185 => 69,  172 => 68,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Iniciar Sesión - GameRate{% endblock %}

{% block stylesheets %}
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }

        body {
            background: radial-gradient(circle at bottom right, rgba(99, 102, 241, 0.05), transparent),
            #f3f4f6;
            min-height: 90vh;
        }

        .auth-card {
            border-radius: 25px !important;
            border: none;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .auth-header {
            background: var(--primary-gradient);
            border-radius: 25px 25px 0 0 !important;
            padding: 40px;
            text-align: center;
            color: white;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .btn-login {
            background: var(--primary-gradient);
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            transition: transform 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }

        .auth-footer {
            text-align: center;
            margin-top: 20px;
            color: #6b7280;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container d-flex align-items-center justify-content-center\" style=\"min-height: 80vh;\">
        <div class=\"col-md-5\">
            <div class=\"card auth-card overflow-hidden\">
                <div class=\"auth-header\">
                    <h2 class=\"fw-bold mb-0\">🚀 ¡Hola de nuevo!</h2>
                    <p class=\"small mb-0 opacity-75\">Identifícate para valorar tus juegos</p>
                </div>

                <div class=\"card-body p-4 p-md-5\">
                    <form method=\"post\">
                        {% if error %}
                            <div class=\"alert alert-danger border-0 shadow-sm\" style=\"border-radius: 12px;\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}

                        {% if app.user %}
                            <div class=\"alert alert-info border-0 text-center\" style=\"border-radius: 12px;\">
                                Ya estás identificado como <strong>{{ app.user.userIdentifier }}</strong><br>
                                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-sm btn-outline-info mt-2\">Cerrar sesión</a>
                            </div>
                        {% endif %}

                        <div class=\"mb-4\">
                            <label for=\"inputEmail\" class=\"form-label fw-bold small text-uppercase\">Email</label>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"tu@email.com\" autocomplete=\"email\" required autofocus>
                        </div>

                        <div class=\"mb-4\">
                            <label for=\"inputPassword\" class=\"form-label fw-bold small text-uppercase\">Contraseña</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"••••••••\" autocomplete=\"current-password\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <button class=\"btn btn-primary btn-login w-100 mt-2\" type=\"submit\">
                            Entrar al sistema 🕹️
                        </button>

                        <div class=\"auth-footer\">
                            <p class=\"mb-0 small\">
                                ¿No tienes cuenta?
                                <a href=\"{{ path('app_register') }}\" class=\"text-decoration-none fw-bold\" style=\"color: #6366f1;\">
                                    Regístrate aquí
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/security/login.html.twig");
    }
}
