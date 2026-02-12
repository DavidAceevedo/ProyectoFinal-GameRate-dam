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

/* videojuego/show.html.twig */
class __TwigTemplate_dff2577854566fc70b0d0098da96c748 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videojuego/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 3, $this->source); })()), "titulo", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-body p-4\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h1 class=\"display-5 fw-bold\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 12, $this->source); })()), "titulo", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                            <span class=\"badge bg-primary fs-6 mb-3\">
                                📂 ";
        // line 14
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 14, $this->source); })()), "categoria", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 14, $this->source); })()), "categoria", [], "any", false, false, false, 14), "nombre", [], "any", false, false, false, 14), "html", null, true)) : ("Sin categoría"));
        yield "
                            </span>
                        </div>

                        ";
        // line 19
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_wishlist", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\">
                                ❤️ Añadir a Deseos
                            </a>
                        ";
        }
        // line 24
        yield "                    </div>

                    <p class=\"lead text-muted mt-3\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 26, $this->source); })()), "descripcion", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>

                    <hr>

                    <h5 class=\"fw-bold mb-3\">Disponible en:</h5>
                    <div class=\"d-flex gap-2\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 32, $this->source); })()), "plataformas", [], "any", false, false, false, 32));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plataforma"]) {
            // line 33
            yield "                            <span class=\"badge bg-dark py-2 px-3\">🎮 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plataforma"], "nombre", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
                        ";
            $context['_iterated'] = true;
        }
        // line 34
        if (!$context['_iterated']) {
            // line 35
            yield "                            <span class=\"text-muted italic\">No hay plataformas asignadas.</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plataforma'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                    </div>
                </div>
            </div>

            ";
        // line 42
        yield "            <div class=\"mt-5\">
                <h3 class=\"h4 mb-4\">💬 Opiniones de la comunidad</h3>

                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 45, $this->source); })()), "opiniones", [], "any", false, false, false, 45));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 46
            yield "                    <div class=\"card mb-3 border-0 shadow-sm\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <h6 class=\"fw-bold mb-0\">👤 ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["opinion"], "autor", [], "any", false, false, false, 49), "userIdentifier", [], "any", false, false, false, 49), "html", null, true);
            yield "</h6>

                                ";
            // line 52
            yield "                                <div class=\"text-warning fs-5\">
                                    ";
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, $context["opinion"], "nota", [], "any", true, true, false, 53)) {
                // line 54
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 55
                    yield "                                            ";
                    yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["opinion"], "nota", [], "any", false, false, false, 55))) ? ("★") : ("☆"));
                    yield "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "                                    ";
            }
            // line 58
            yield "                                </div>
                            </div>
                            <p class=\"mb-0 mt-2 text-secondary\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["opinion"], "comentario", [], "any", false, false, false, 60), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                    <div class=\"alert alert-light border\">
                        Aún no hay opiniones. ¡Sé el primero en decir qué te parece!
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['opinion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "
                ";
        // line 70
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                    <div class=\"card mt-4 border-0 shadow-sm bg-white\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"card-title fw-bold mb-3\">Escribir una opinión</h5>
                            ";
            // line 74
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_start');
            yield "
                            <div class=\"mb-3\">
                                ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "nota", [], "any", false, false, false, 76), 'label', ["label" => "Puntuación"]);
            yield "
                                ";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "nota", [], "any", false, false, false, 77), 'widget');
            yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "comentario", [], "any", false, false, false, 80), 'label', ["label" => "Tu comentario"]);
            yield "
                                ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "comentario", [], "any", false, false, false, 81), 'widget');
            yield "
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary px-4\">Publicar Opinión</button>
                            ";
            // line 84
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
            yield "
                        </div>
                    </div>
                ";
        } else {
            // line 88
            yield "                    <div class=\"alert alert-secondary mt-4\">
                        Para dejar una opinión, por favor <a href=\"";
            // line 89
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">inicia sesión</a>.
                    </div>
                ";
        }
        // line 92
        yield "            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-body text-center\">
                    <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_index");
        yield "\" class=\"btn btn-secondary w-100 mb-2\">Volver al catálogo</a>
                    ";
        // line 99
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videojuego_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["videojuego"]) || array_key_exists("videojuego", $context) ? $context["videojuego"] : (function () { throw new RuntimeError('Variable "videojuego" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"btn btn-warning w-100\">Editar Información</a>
                    ";
        }
        // line 102
        yield "                </div>
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
        return "videojuego/show.html.twig";
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
        return array (  308 => 102,  302 => 100,  300 => 99,  296 => 98,  288 => 92,  282 => 89,  279 => 88,  272 => 84,  266 => 81,  262 => 80,  256 => 77,  252 => 76,  247 => 74,  242 => 71,  239 => 70,  236 => 68,  227 => 64,  225 => 63,  217 => 60,  213 => 58,  210 => 57,  201 => 55,  196 => 54,  194 => 53,  191 => 52,  186 => 49,  181 => 46,  176 => 45,  171 => 42,  165 => 37,  158 => 35,  156 => 34,  149 => 33,  144 => 32,  135 => 26,  131 => 24,  123 => 20,  120 => 19,  113 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ videojuego.titulo }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-body p-4\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h1 class=\"display-5 fw-bold\">{{ videojuego.titulo }}</h1>
                            <span class=\"badge bg-primary fs-6 mb-3\">
                                📂 {{ videojuego.categoria ? videojuego.categoria.nombre : 'Sin categoría' }}
                            </span>
                        </div>

                        {# BOTÓN DE LISTA DE DESEOS (Entidad 3 - Ampliación) #}
                        {% if app.user %}
                            <a href=\"{{ path('videojuego_wishlist', {'id': videojuego.id}) }}\" class=\"btn btn-outline-danger\">
                                ❤️ Añadir a Deseos
                            </a>
                        {% endif %}
                    </div>

                    <p class=\"lead text-muted mt-3\">{{ videojuego.descripcion }}</p>

                    <hr>

                    <h5 class=\"fw-bold mb-3\">Disponible en:</h5>
                    <div class=\"d-flex gap-2\">
                        {% for plataforma in videojuego.plataformas %}
                            <span class=\"badge bg-dark py-2 px-3\">🎮 {{ plataforma.nombre }}</span>
                        {% else %}
                            <span class=\"text-muted italic\">No hay plataformas asignadas.</span>
                        {% endfor %}
                    </div>
                </div>
            </div>

            {# --- SECCIÓN DE OPINIONES --- #}
            <div class=\"mt-5\">
                <h3 class=\"h4 mb-4\">💬 Opiniones de la comunidad</h3>

                {% for opinion in videojuego.opiniones %}
                    <div class=\"card mb-3 border-0 shadow-sm\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <h6 class=\"fw-bold mb-0\">👤 {{ opinion.autor.userIdentifier }}</h6>

                                {# Visualización de la nota con estrellas #}
                                <div class=\"text-warning fs-5\">
                                    {% if opinion.nota is defined %}
                                        {% for i in 1..5 %}
                                            {{ i <= opinion.nota ? '★' : '☆' }}
                                        {% endfor %}
                                    {% endif %}
                                </div>
                            </div>
                            <p class=\"mb-0 mt-2 text-secondary\">{{ opinion.comentario }}</p>
                        </div>
                    </div>
                {% else %}
                    <div class=\"alert alert-light border\">
                        Aún no hay opiniones. ¡Sé el primero en decir qué te parece!
                    </div>
                {% endfor %}

                {# Formulario para dejar opinión (Uso de Symfony Forms) #}
                {% if app.user %}
                    <div class=\"card mt-4 border-0 shadow-sm bg-white\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"card-title fw-bold mb-3\">Escribir una opinión</h5>
                            {{ form_start(form) }}
                            <div class=\"mb-3\">
                                {{ form_label(form.nota, 'Puntuación') }}
                                {{ form_widget(form.nota) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.comentario, 'Tu comentario') }}
                                {{ form_widget(form.comentario) }}
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary px-4\">Publicar Opinión</button>
                            {{ form_end(form) }}
                        </div>
                    </div>
                {% else %}
                    <div class=\"alert alert-secondary mt-4\">
                        Para dejar una opinión, por favor <a href=\"{{ path('app_login') }}\">inicia sesión</a>.
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-body text-center\">
                    <a href=\"{{ path('videojuego_index') }}\" class=\"btn btn-secondary w-100 mb-2\">Volver al catálogo</a>
                    {% if app.user %}
                        <a href=\"{{ path('videojuego_edit', {'id': videojuego.id}) }}\" class=\"btn btn-warning w-100\">Editar Información</a>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "videojuego/show.html.twig", "/home/davidam/PhpstormProjects/ProyectoFinal-GameRate-dam/templates/videojuego/show.html.twig");
    }
}
