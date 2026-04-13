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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\">
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "    <style>
        /* Pequeño ajuste para que la navbar sea más \"Pro\" */
        .navbar {
            background-color: #0f172a !important; /* Negro azulado muy oscuro */
            border-bottom: 2px solid #6366f1; /* Línea morada sutil */
        }
        .nav-link {
            font-weight: 500;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #a855f7 !important; /* Color morado al pasar el ratón */
        }
        .navbar-brand {
            letter-spacing: -1px;
        }
    </style>
</head>
<body class=\"bg-light\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\">
            <span style=\"color: #6366f1;\">🎮</span> GameRate
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto align-items-center\">

                ";
        // line 41
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link px-3\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Inicio</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link px-3\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\">Catálogo</a>
                </li>

                ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white border border-secondary rounded px-3 ms-lg-2\" href=\"#\" id=\"userMenu\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            👤 ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "userIdentifier", [], "any", false, false, false, 52), "html", null, true);
            yield "
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end shadow border-0\" aria-labelledby=\"userMenu\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wishlist");
            yield "\">
                                    ❤️ Mis Deseos
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_new");
            yield "\">
                                    ➕ Añadir Juego
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"bi bi-box-arrow-right\"></i> Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        } else {
            // line 74
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link px-3\" href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Entrar</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-primary btn-sm ms-lg-2 px-3\"
                           style=\"background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); border: none; border-radius: 8px;\"
                           href=\"";
            // line 80
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Registrarse</a>
                    </li>
                ";
        }
        // line 83
        yield "            </ul>
        </div>
    </div>
</nav>

<div class=\"container\">
    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 90
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 91
                yield "            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show shadow-sm border-0\"
                 style=\"border-radius: 12px; background-color: white; border-left: 5px solid ";
                // line 92
                yield ((($context["label"] == "error")) ? ("#dc3545") : ("#6366f1"));
                yield ";\" role=\"alert\">
                ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "
    ";
        // line 99
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 100
        yield "</div>

<footer class=\"text-center text-muted mt-5 mb-4 py-4\">
    <div class=\"container border-top pt-4\">
        <small class=\"fw-bold text-uppercase\" style=\"letter-spacing: 1px;\">
            &copy; ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " GameRate <span class=\"mx-2\">|</span> Proyecto Final DAM
        </small>
    </div>
</footer>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
";
        // line 111
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 112
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

    // line 8
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

    // line 99
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

    // line 111
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
        return array (  320 => 111,  298 => 99,  276 => 8,  253 => 5,  240 => 112,  238 => 111,  229 => 105,  222 => 100,  220 => 99,  217 => 98,  211 => 97,  201 => 93,  197 => 92,  192 => 91,  187 => 90,  183 => 89,  175 => 83,  169 => 80,  161 => 75,  158 => 74,  148 => 67,  139 => 61,  131 => 56,  124 => 52,  120 => 50,  118 => 49,  112 => 46,  105 => 42,  102 => 41,  89 => 30,  66 => 9,  64 => 8,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}GameRate{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\">
    {% block stylesheets %}{% endblock %}
    <style>
        /* Pequeño ajuste para que la navbar sea más \"Pro\" */
        .navbar {
            background-color: #0f172a !important; /* Negro azulado muy oscuro */
            border-bottom: 2px solid #6366f1; /* Línea morada sutil */
        }
        .nav-link {
            font-weight: 500;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #a855f7 !important; /* Color morado al pasar el ratón */
        }
        .navbar-brand {
            letter-spacing: -1px;
        }
    </style>
</head>
<body class=\"bg-light\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold\" href=\"{{ path('videojuego_index') }}\">
            <span style=\"color: #6366f1;\">🎮</span> GameRate
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto align-items-center\">

                {# BOTÓN INICIO AÑADIDO #}
                <li class=\"nav-item\">
                    <a class=\"nav-link px-3\" href=\"{{ path('app_home') }}\">Inicio</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link px-3\" href=\"{{ path('videojuego_index') }}\">Catálogo</a>
                </li>

                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white border border-secondary rounded px-3 ms-lg-2\" href=\"#\" id=\"userMenu\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            👤 {{ app.user.userIdentifier }}
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end shadow border-0\" aria-labelledby=\"userMenu\">
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
                                    <i class=\"bi bi-box-arrow-right\"></i> Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link px-3\" href=\"{{ path('app_login') }}\">Entrar</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-primary btn-sm ms-lg-2 px-3\"
                           style=\"background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); border: none; border-radius: 8px;\"
                           href=\"{{ path('app_register') }}\">Registrarse</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

<div class=\"container\">
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show shadow-sm border-0\"
                 style=\"border-radius: 12px; background-color: white; border-left: 5px solid {{ label == 'error' ? '#dc3545' : '#6366f1' }};\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {% block body %}{% endblock %}
</div>

<footer class=\"text-center text-muted mt-5 mb-4 py-4\">
    <div class=\"container border-top pt-4\">
        <small class=\"fw-bold text-uppercase\" style=\"letter-spacing: 1px;\">
            &copy; {{ \"now\"|date(\"Y\") }} GameRate <span class=\"mx-2\">|</span> Proyecto Final DAM
        </small>
    </div>
</footer>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/base.html.twig");
    }
}
