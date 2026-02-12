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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">🎮 Catálogo de Videojuegos</h1>
        ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_new");
            yield "\" class=\"btn btn-success\">+ Añadir Juego</a>
        ";
        }
        // line 11
        yield "    </div>

    ";
        // line 14
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\" method=\"get\" class=\"d-flex shadow-sm\">
                <input type=\"text\" name=\"q\" class=\"form-control me-2\" placeholder=\"Buscar por título...\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("busqueda", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["busqueda"]) || array_key_exists("busqueda", $context) ? $context["busqueda"] : (function () { throw new RuntimeError('Variable "busqueda" does not exist.', 17, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                <button class=\"btn btn-primary\" type=\"submit\">Buscar</button>
                ";
        // line 19
        if ((array_key_exists("busqueda", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["busqueda"]) || array_key_exists("busqueda", $context) ? $context["busqueda"] : (function () { throw new RuntimeError('Variable "busqueda" does not exist.', 19, $this->source); })())))) {
            // line 20
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
            yield "\" class=\"btn btn-outline-secondary ms-2\">Limpiar</a>
                ";
        }
        // line 22
        yield "            </form>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["videojuegos"]) || array_key_exists("videojuegos", $context) ? $context["videojuegos"] : (function () { throw new RuntimeError('Variable "videojuegos" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["videojuego"]) {
            // line 28
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100 shadow-sm border-0\">
                    <div class=\"card-body text-center bg-white py-4\">
                        <span style=\"font-size: 3rem;\">🕹️</span>
                        <h5 class=\"card-title text-primary mt-3\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "titulo", [], "any", false, false, false, 32), "html", null, true);
            yield "</h5>

                        ";
            // line 35
            yield "                        <span class=\"badge bg-info text-dark\">
                            📂 ";
            // line 36
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "categoria", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "categoria", [], "any", false, false, false, 36), "nombre", [], "any", false, false, false, 36), "html", null, true)) : ("Sin categoría"));
            yield "
                        </span>

                        ";
            // line 40
            yield "                        <div class=\"mt-2\">
                            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "plataformas", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["plataforma"]) {
                // line 42
                yield "                                <span class=\"badge bg-dark\" style=\"font-size: 0.65rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plataforma"], "nombre", [], "any", false, false, false, 42), "html", null, true);
                yield "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plataforma'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                        </div>
                    </div>

                    <div class=\"card-body bg-white pt-0\">
                        <p class=\"card-text text-muted small\">
                            ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "descripcion", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "descripcion", [], "any", false, false, false, 49), "Sin descripción.")) : ("Sin descripción.")), 0, 80), "html", null, true);
            yield "...
                        </p>
                    </div>

                    <div class=\"card-footer bg-white border-top-0 d-flex justify-content-between align-items-center pb-3\">
                        <div class=\"btn-group\">
                            <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm\">Ver</a>
                            ";
            // line 56
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning btn-sm\">Editar</a>
                            ";
            }
            // line 59
            yield "                        </div>

                        ";
            // line 61
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('¿Borrar este juego?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["videojuego"], "id", [], "any", false, false, false, 63))), "html", null, true);
                yield "\">
                                <button class=\"btn btn-link text-danger p-0 ms-2\" style=\"text-decoration:none;\">🗑️ Borrar</button>
                            </form>
                        ";
            }
            // line 67
            yield "                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "            <div class=\"col-12 text-center py-5\">
                <p class=\"lead text-muted\">No se encontraron videojuegos.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['videojuego'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
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
        return array (  249 => 75,  240 => 71,  238 => 70,  231 => 67,  224 => 63,  219 => 62,  217 => 61,  213 => 59,  207 => 57,  205 => 56,  201 => 55,  192 => 49,  185 => 44,  176 => 42,  172 => 41,  169 => 40,  163 => 36,  160 => 35,  155 => 32,  149 => 28,  144 => 27,  137 => 22,  131 => 20,  129 => 19,  124 => 17,  120 => 16,  116 => 14,  112 => 11,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catálogo - GameRate{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">🎮 Catálogo de Videojuegos</h1>
        {% if app.user %}
            <a href=\"{{ path('videojuego_new') }}\" class=\"btn btn-success\">+ Añadir Juego</a>
        {% endif %}
    </div>

    {# Buscador #}
    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form action=\"{{ path('videojuego_index') }}\" method=\"get\" class=\"d-flex shadow-sm\">
                <input type=\"text\" name=\"q\" class=\"form-control me-2\" placeholder=\"Buscar por título...\" value=\"{{ busqueda|default('') }}\">
                <button class=\"btn btn-primary\" type=\"submit\">Buscar</button>
                {% if busqueda is defined and busqueda is not empty %}
                    <a href=\"{{ path('videojuego_index') }}\" class=\"btn btn-outline-secondary ms-2\">Limpiar</a>
                {% endif %}
            </form>
        </div>
    </div>

    <div class=\"row\">
        {% for videojuego in videojuegos %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100 shadow-sm border-0\">
                    <div class=\"card-body text-center bg-white py-4\">
                        <span style=\"font-size: 3rem;\">🕹️</span>
                        <h5 class=\"card-title text-primary mt-3\">{{ videojuego.titulo }}</h5>

                        {# CORRECCIÓN: Usamos categoria en lugar de genero #}
                        <span class=\"badge bg-info text-dark\">
                            📂 {{ videojuego.categoria ? videojuego.categoria.nombre : 'Sin categoría' }}
                        </span>

                        {# EXTRA: Mostramos las plataformas también aquí #}
                        <div class=\"mt-2\">
                            {% for plataforma in videojuego.plataformas %}
                                <span class=\"badge bg-dark\" style=\"font-size: 0.65rem;\">{{ plataforma.nombre }}</span>
                            {% endfor %}
                        </div>
                    </div>

                    <div class=\"card-body bg-white pt-0\">
                        <p class=\"card-text text-muted small\">
                            {{ videojuego.descripcion|default('Sin descripción.')|slice(0, 80) }}...
                        </p>
                    </div>

                    <div class=\"card-footer bg-white border-top-0 d-flex justify-content-between align-items-center pb-3\">
                        <div class=\"btn-group\">
                            <a href=\"{{ path('videojuego_show', {'id': videojuego.id}) }}\" class=\"btn btn-outline-info btn-sm\">Ver</a>
                            {% if app.user %}
                                <a href=\"{{ path('videojuego_edit', {'id': videojuego.id}) }}\" class=\"btn btn-outline-warning btn-sm\">Editar</a>
                            {% endif %}
                        </div>

                        {% if app.user %}
                            <form method=\"post\" action=\"{{ path('videojuego_delete', {'id': videojuego.id}) }}\" onsubmit=\"return confirm('¿Borrar este juego?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ videojuego.id) }}\">
                                <button class=\"btn btn-link text-danger p-0 ms-2\" style=\"text-decoration:none;\">🗑️ Borrar</button>
                            </form>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <p class=\"lead text-muted\">No se encontraron videojuegos.</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "videojuego/index.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/videojuego/index.html.twig");
    }
}
