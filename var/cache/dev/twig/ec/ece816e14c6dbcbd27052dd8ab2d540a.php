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

/* videojuego/index.html.twig */
class __TwigTemplate_62fd9d38653616ca841f797ab3f1a7dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/index.html.twig"));

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

        yield "Catálogo - GameRate";
        
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
        /* Estilo Innovador: Glassmorphism y Elevación */
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        body {
            /* Un degradado de gris azulado claro a un lavanda muy suave */
            background: linear-gradient(135deg, #e2e8f0 0%, #ddd6fe 100%) !important;
            background-attachment: fixed;
            min-height: 100vh;
            font-family: 'Inter', system-ui, sans-serif;
            color: #1e293b;
        }

        .game-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 20px !important;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
        }

        .img-container {
            position: relative;
            overflow: hidden;
        }

        .img-container img {
            transition: transform 0.6s ease;
        }

        .game-card:hover .img-container img {
            transform: scale(1.1) rotate(2deg);
        }

        .category-badge {
            background: var(--primary-gradient);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 5px 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .btn-custom-info {
            border-radius: 10px;
            border: 2px solid #6366f1;
            color: #6366f1;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-custom-info:hover {
            background: #6366f1;
            color: white;
        }

        /* Buscador Moderno */
        .search-input {
            border-radius: 15px 0 0 15px !important;
            border: 2px solid #e5e7eb;
            padding: 12px 20px;
        }

        .search-btn {
            border-radius: 0 15px 15px 0 !important;
            background: var(--primary-gradient);
            border: none;
            padding: 0 25px;
        }

        /* Estilo para botón Home */
        .btn-home {
            border-radius: 12px;
            border: 2px solid #6366f1;
            color: #6366f1;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-home:hover {
            background: rgba(99, 102, 241, 0.1);
            color: #6366f1;
            transform: scale(1.05);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
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

        // line 103
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-5 mt-3 flex-wrap gap-3\">
        <h1 class=\"fw-extrabold text-dark mb-0\" style=\"letter-spacing: -1px;\">🎮 <span class=\"text-transparent bg-clip-text\" style=\"background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;\">Catálogo de Videojuegos</span></h1>

        <div class=\"d-flex gap-2\">

            ";
        // line 108
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_new");
            yield "\" class=\"btn text-white shadow-sm px-4 py-2\" style=\"background: var(--primary-gradient); border-radius: 12px; font-weight: 600;\">+ Añadir Juego</a>
            ";
        }
        // line 111
        yield "        </div>
    </div>

    ";
        // line 115
        yield "    <div class=\"row mb-5 justify-content-center\">
        <div class=\"col-md-8\">
            <form action=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\" method=\"get\" class=\"d-flex shadow-sm\" style=\"border-radius: 15px;\">
                <input type=\"text\" name=\"q\" class=\"form-control search-input\" placeholder=\"¿Qué quieres jugar hoy?...\" value=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("busqueda", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["busqueda"]) || array_key_exists("busqueda", $context) ? $context["busqueda"] : (function () { throw new RuntimeError('Variable "busqueda" does not exist.', 118, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                <button class=\"btn btn-primary search-btn\" type=\"submit\">Buscar</button>
            </form>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["videojuegos"]) || array_key_exists("videojuegos", $context) ? $context["videojuegos"] : (function () { throw new RuntimeError('Variable "videojuegos" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["videojuego"]) {
            // line 126
            yield "            <div class=\"col-md-4 mb-5\">
                <div class=\"card game-card h-100 border-0 shadow-sm\">

                    ";
            // line 130
            yield "                    <div class=\"img-container\" style=\"height: 220px; background-color: #f8f9fa;\">
                        ";
            // line 131
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "imagen", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 132
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "imagen", [], "any", false, false, false, 132), "html", null, true);
                yield "\"
                                 class=\"w-100 h-100\"
                                 style=\"object-fit: cover;\"
                                 alt=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "titulo", [], "any", false, false, false, 135), "html", null, true);
                yield "\"
                                 referrerpolicy=\"no-referrer\">
                        ";
            } else {
                // line 138
                yield "                            <div class=\"d-flex align-items-center justify-content-center h-100 bg-light text-muted\">
                                <span style=\"font-size: 3rem;\">🕹️</span>
                            </div>
                        ";
            }
            // line 142
            yield "                    </div>

                    <div class=\"card-body text-center bg-white px-4\">
                        <h5 class=\"fw-bold text-dark mb-2\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "titulo", [], "any", false, false, false, 145), "html", null, true);
            yield "</h5>

                        <span class=\"badge category-badge mb-3\">
                            ";
            // line 148
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "categoria", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "categoria", [], "any", false, false, false, 148), "nombre", [], "any", false, false, false, 148), "html", null, true)) : ("Sin categoría"));
            yield "
                        </span>

                        <div class=\"d-flex flex-wrap justify-content-center gap-1 mb-3\">
                            ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "plataformas", [], "any", false, false, false, 152));
            foreach ($context['_seq'] as $context["_key"] => $context["plataforma"]) {
                // line 153
                yield "                                <span class=\"badge rounded-pill bg-light text-dark border\" style=\"font-size: 0.7rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plataforma"], "nombre", [], "any", false, false, false, 153), "html", null, true);
                yield "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plataforma'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                        </div>

                        <p class=\"card-text text-muted small px-2\">
                            ";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "descripcion", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "descripcion", [], "any", false, false, false, 158), "Sin descripción.")) : ("Sin descripción.")), 0, 75), "html", null, true);
            yield "...
                        </p>
                    </div>

                    <div class=\"card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-4 px-4\">
                        <div class=\"w-100 d-flex justify-content-between align-items-center\">
                            <a href=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            yield "\" class=\"btn btn-custom-info btn-sm px-4\">Detalles</a>

                            <div class=\"d-flex align-items-center\">
                                ";
            // line 167
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 168
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                yield "\" class=\"text-warning me-3\" title=\"Editar\" style=\"text-decoration:none;\">✏️</a>

                                    <form method=\"post\" action=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 170)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('¿Borrar este juego?');\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 171))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-link text-danger p-0 m-0\" style=\"text-decoration:none;\">🗑️</button>
                                    </form>
                                ";
            }
            // line 175
            yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 180
        if (!$context['_iterated']) {
            // line 181
            yield "            <div class=\"col-12 text-center py-5\">
                <p class=\"lead text-muted\">No se encontraron videojuegos en la base de datos.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['videojuego'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "    </div>
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
        return "videojuego/index.html.twig";
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
        return array (  381 => 185,  372 => 181,  370 => 180,  361 => 175,  354 => 171,  350 => 170,  344 => 168,  342 => 167,  336 => 164,  327 => 158,  322 => 155,  313 => 153,  309 => 152,  302 => 148,  296 => 145,  291 => 142,  285 => 138,  279 => 135,  272 => 132,  270 => 131,  267 => 130,  262 => 126,  257 => 125,  247 => 118,  243 => 117,  239 => 115,  234 => 111,  228 => 109,  226 => 108,  219 => 103,  206 => 102,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catálogo - GameRate{% endblock %}

{% block stylesheets %}
    <style>
        /* Estilo Innovador: Glassmorphism y Elevación */
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        body {
            /* Un degradado de gris azulado claro a un lavanda muy suave */
            background: linear-gradient(135deg, #e2e8f0 0%, #ddd6fe 100%) !important;
            background-attachment: fixed;
            min-height: 100vh;
            font-family: 'Inter', system-ui, sans-serif;
            color: #1e293b;
        }

        .game-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 20px !important;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
        }

        .img-container {
            position: relative;
            overflow: hidden;
        }

        .img-container img {
            transition: transform 0.6s ease;
        }

        .game-card:hover .img-container img {
            transform: scale(1.1) rotate(2deg);
        }

        .category-badge {
            background: var(--primary-gradient);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 5px 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .btn-custom-info {
            border-radius: 10px;
            border: 2px solid #6366f1;
            color: #6366f1;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-custom-info:hover {
            background: #6366f1;
            color: white;
        }

        /* Buscador Moderno */
        .search-input {
            border-radius: 15px 0 0 15px !important;
            border: 2px solid #e5e7eb;
            padding: 12px 20px;
        }

        .search-btn {
            border-radius: 0 15px 15px 0 !important;
            background: var(--primary-gradient);
            border: none;
            padding: 0 25px;
        }

        /* Estilo para botón Home */
        .btn-home {
            border-radius: 12px;
            border: 2px solid #6366f1;
            color: #6366f1;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-home:hover {
            background: rgba(99, 102, 241, 0.1);
            color: #6366f1;
            transform: scale(1.05);
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mb-5 mt-3 flex-wrap gap-3\">
        <h1 class=\"fw-extrabold text-dark mb-0\" style=\"letter-spacing: -1px;\">🎮 <span class=\"text-transparent bg-clip-text\" style=\"background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;\">Catálogo de Videojuegos</span></h1>

        <div class=\"d-flex gap-2\">

            {% if app.user %}
                <a href=\"{{ path('videojuego_new') }}\" class=\"btn text-white shadow-sm px-4 py-2\" style=\"background: var(--primary-gradient); border-radius: 12px; font-weight: 600;\">+ Añadir Juego</a>
            {% endif %}
        </div>
    </div>

    {# Buscador Modernizado #}
    <div class=\"row mb-5 justify-content-center\">
        <div class=\"col-md-8\">
            <form action=\"{{ path('videojuego_index') }}\" method=\"get\" class=\"d-flex shadow-sm\" style=\"border-radius: 15px;\">
                <input type=\"text\" name=\"q\" class=\"form-control search-input\" placeholder=\"¿Qué quieres jugar hoy?...\" value=\"{{ busqueda|default('') }}\">
                <button class=\"btn btn-primary search-btn\" type=\"submit\">Buscar</button>
            </form>
        </div>
    </div>

    <div class=\"row\">
        {% for videojuego in videojuegos %}
            <div class=\"col-md-4 mb-5\">
                <div class=\"card game-card h-100 border-0 shadow-sm\">

                    {# IMAGEN CON EFECTO #}
                    <div class=\"img-container\" style=\"height: 220px; background-color: #f8f9fa;\">
                        {% if videojuego.imagen %}
                            <img src=\"{{ videojuego.imagen }}\"
                                 class=\"w-100 h-100\"
                                 style=\"object-fit: cover;\"
                                 alt=\"{{ videojuego.titulo }}\"
                                 referrerpolicy=\"no-referrer\">
                        {% else %}
                            <div class=\"d-flex align-items-center justify-content-center h-100 bg-light text-muted\">
                                <span style=\"font-size: 3rem;\">🕹️</span>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"card-body text-center bg-white px-4\">
                        <h5 class=\"fw-bold text-dark mb-2\">{{ videojuego.titulo }}</h5>

                        <span class=\"badge category-badge mb-3\">
                            {{ videojuego.categoria ? videojuego.categoria.nombre : 'Sin categoría' }}
                        </span>

                        <div class=\"d-flex flex-wrap justify-content-center gap-1 mb-3\">
                            {% for plataforma in videojuego.plataformas %}
                                <span class=\"badge rounded-pill bg-light text-dark border\" style=\"font-size: 0.7rem;\">{{ plataforma.nombre }}</span>
                            {% endfor %}
                        </div>

                        <p class=\"card-text text-muted small px-2\">
                            {{ videojuego.descripcion|default('Sin descripción.')|slice(0, 75) }}...
                        </p>
                    </div>

                    <div class=\"card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-4 px-4\">
                        <div class=\"w-100 d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('videojuego_show', {'id': videojuego.id}) }}\" class=\"btn btn-custom-info btn-sm px-4\">Detalles</a>

                            <div class=\"d-flex align-items-center\">
                                {% if app.user %}
                                    <a href=\"{{ path('videojuego_edit', {'id': videojuego.id}) }}\" class=\"text-warning me-3\" title=\"Editar\" style=\"text-decoration:none;\">✏️</a>

                                    <form method=\"post\" action=\"{{ path('videojuego_delete', {'id': videojuego.id}) }}\" onsubmit=\"return confirm('¿Borrar este juego?');\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ videojuego.id) }}\">
                                        <button class=\"btn btn-link text-danger p-0 m-0\" style=\"text-decoration:none;\">🗑️</button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <p class=\"lead text-muted\">No se encontraron videojuegos en la base de datos.</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "videojuego/index.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/videojuego/index.html.twig");
    }
}
