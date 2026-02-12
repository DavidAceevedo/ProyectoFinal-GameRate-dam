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

/* base.html.twig */
class __TwigTemplate_24edd6907074f4f24a93e80de33abf66 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 8
        yield "</head>
<body class=\"bg-light\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\">🎮 GameRate</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\">Catálogo</a>
                </li>

                ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                    ";
            // line 25
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white border border-secondary rounded px-3 ms-lg-2\" href=\"#\" id=\"userMenu\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            👤 ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
            yield "
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"userMenu\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wishlist");
            yield "\">
                                    ❤️ Mis Deseos
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_new");
            yield "\">
                                    ➕ Añadir Juego
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"";
            // line 42
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        } else {
            // line 49
            yield "                    ";
            // line 50
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Entrar</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-primary btn-sm mt-1 ms-lg-2\" href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Registrarse</a>
                    </li>
                ";
        }
        // line 57
        yield "            </ul>
        </div>
    </div>
</nav>

<div class=\"container\">
    ";
        // line 64
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 65
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 66
                yield "            ";
                // line 67
                yield "            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show shadow-sm\" role=\"alert\">
                ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "
    ";
        // line 74
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 75
        yield "</div>

<footer class=\"text-center text-muted mt-5 mb-4\">
    <small>&copy; ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " GameRate - Proyecto Final DAM</small>
</footer>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
";
        // line 82
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 83
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "GameRate";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  287 => 82,  265 => 74,  243 => 7,  220 => 5,  207 => 83,  205 => 82,  198 => 78,  193 => 75,  191 => 74,  188 => 73,  182 => 72,  172 => 68,  167 => 67,  165 => 66,  160 => 65,  155 => 64,  147 => 57,  141 => 54,  135 => 51,  132 => 50,  130 => 49,  120 => 42,  111 => 36,  103 => 31,  96 => 27,  92 => 25,  90 => 24,  88 => 23,  82 => 20,  71 => 12,  65 => 8,  63 => 7,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}GameRate{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
</head>
<body class=\"bg-light\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold\" href=\"{{ path('videojuego_index') }}\">🎮 GameRate</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('videojuego_index') }}\">Catálogo</a>
                </li>

                {% if app.user %}
                    {# MENU PARA USUARIOS LOGUEADOS #}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white border border-secondary rounded px-3 ms-lg-2\" href=\"#\" id=\"userMenu\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            👤 {{ app.user.userIdentifier }}
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"userMenu\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_wishlist') }}\">
                                    ❤️ Mis Deseos
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('videojuego_new') }}\">
                                    ➕ Añadir Juego
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                {% else %}
                    {# MENU PARA VISITANTES #}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Entrar</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-primary btn-sm mt-1 ms-lg-2\" href=\"{{ path('app_register') }}\">Registrarse</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

<div class=\"container\">
    {# Mensajes Flash (Éxito, Error, etc.) #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            {# Mapeo de 'success' a 'success' y 'danger' a 'danger' para Bootstrap #}
            <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show shadow-sm\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {% block body %}{% endblock %}
</div>

<footer class=\"text-center text-muted mt-5 mb-4\">
    <small>&copy; {{ \"now\"|date(\"Y\") }} GameRate - Proyecto Final DAM</small>
</footer>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/base.html.twig");
    }
}
