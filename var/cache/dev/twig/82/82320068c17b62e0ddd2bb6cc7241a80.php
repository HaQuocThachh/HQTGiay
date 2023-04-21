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

/* home/view.html.twig */
class __TwigTemplate_db8bd83224fa95b438fbd6e0132b9cea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"mainer\" class=\"mainer\">
        <div class=\"container-fluid container-max-width-xl\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["products"]);
        foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
            // line 9
            echo "                <div class=\"mt-4 d-flex justify-content-between title-set\">
                    <h3 class=\"item-name\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "Name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h3>
                    <div class=\"d-none d-md-inline-block align-self-baseline\"></div>
                </div>
                <div class=\"row detail-set\">
                    <div class=\"col-24 col-sm-8 col-md-6 attr-cover\">
                        <td><img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploadproductImages" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "Image", [], "any", false, false, false, 15))), "html", null, true);
            echo "\" height=\"400px\" width=\"300px\"></td>
                    </div>
                </div>
                <div class=\"col-24 col-sm-16 col-md-18 mt-4 mt-sm-0 attr-main\">
                    <div class=\"attr-item\">
                        <b class=\"text-muted\">Category Name:</b>
                        <span>
                                    <a>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "Name", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
                                </span>
                    </div>
                    <div class=\"attr-item\">
                        <b class=\"text-muted\">Genre Name:</b>
                        <span>
                                    <a>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "GenreName", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
                                </span>
                    </div>
                    <div class=\"attr-item\">
                        <b class=\"text-muted\">Price:</b>
                        <span>
                                    <a>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "Price", [], "any", false, false, false, 34), "html", null, true);
            echo ".000 VND</a>
                                </span>
                    </div>

                    <h5 class=\"mt-3 text-muted\">Description:</h5>
                    <div class=\"mt-3\">
                        <div id=\"limit-height-ctrl-description\" class=\"limit-height-ctrl max -100px contracted\">
                            <div id=\"limit-height-body-description\" class=\"limit-height-body\">
                                <div class=\"limit-html\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "Description", [], "any", false, false, false, 42), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    </div>

                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  148 => 42,  137 => 34,  128 => 28,  119 => 22,  109 => 15,  101 => 10,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ parent ()}} {% endblock %}

{% block body %}
    <div id=\"mainer\" class=\"mainer\">
        <div class=\"container-fluid container-max-width-xl\">
            {% for products in products %}
                <div class=\"mt-4 d-flex justify-content-between title-set\">
                    <h3 class=\"item-name\">{{ product.Name }}</h3>
                    <div class=\"d-none d-md-inline-block align-self-baseline\"></div>
                </div>
                <div class=\"row detail-set\">
                    <div class=\"col-24 col-sm-8 col-md-6 attr-cover\">
                        <td><img src=\"{{ asset('upload\\productImages' ~ product.Image) }}\" height=\"400px\" width=\"300px\"></td>
                    </div>
                </div>
                <div class=\"col-24 col-sm-16 col-md-18 mt-4 mt-sm-0 attr-main\">
                    <div class=\"attr-item\">
                        <b class=\"text-muted\">Category Name:</b>
                        <span>
                                    <a>{{ product.Name }}</a>
                                </span>
                    </div>
                    <div class=\"attr-item\">
                        <b class=\"text-muted\">Genre Name:</b>
                        <span>
                                    <a>{{ product.GenreName }}</a>
                                </span>
                    </div>
                    <div class=\"attr-item\">
                        <b class=\"text-muted\">Price:</b>
                        <span>
                                    <a>{{ product.Price }}.000 VND</a>
                                </span>
                    </div>

                    <h5 class=\"mt-3 text-muted\">Description:</h5>
                    <div class=\"mt-3\">
                        <div id=\"limit-height-ctrl-description\" class=\"limit-height-ctrl max -100px contracted\">
                            <div id=\"limit-height-body-description\" class=\"limit-height-body\">
                                <div class=\"limit-html\">{{ product.Description }}</div>
                            </div>
                        </div>
                    </div>

                </div>

            {% endfor %}
        </div>
    </div>
{% endblock %}", "home/view.html.twig", "C:\\Users\\ADMIN\\HQTGiay\\templates\\home\\view.html.twig");
    }
}
