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

/* product/edit.html.twig */
class __TwigTemplate_c94b0a9b1b2f43c4c13c381635792109 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "ProductName", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Product name"]]);
        // line 11
        echo "
        <div class=\"invalid-feedback\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "ProductName", [], "any", false, false, false, 13), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"category\">Category Name:</label>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "category", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Category name"]]);
        // line 23
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"genre\">Genre Name:</label>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "genre", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Genre name"]]);
        // line 32
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"description\">Description:</label>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Description", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        // line 41
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"price\">Price:</label>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Price", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Price"]]);
        // line 50
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"image\">Image</label>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Image", [], "any", false, false, false, 54), 'widget', ["attr" => ["placeholder" => "Please select a picture"]]);
        // line 58
        echo "
    </div>
    ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        // line 63
        echo "    <input type=\"submit\" name=\"edit_product\" value=\"Edit\" class=\"btn btn-primary\"/>
    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 64,  131 => 63,  129 => 62,  127 => 61,  123 => 58,  121 => 54,  115 => 50,  113 => 45,  107 => 41,  105 => 36,  99 => 32,  97 => 27,  91 => 23,  89 => 18,  81 => 13,  77 => 11,  75 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {{ form_start(form) }}
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        {{ form_widget(form.ProductName,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Product name'
            }
        }) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.ProductName) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"category\">Category Name:</label>
        {{ form_widget(form.category,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Category name'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"genre\">Genre Name:</label>
        {{ form_widget(form.genre,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Genre name'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"description\">Description:</label>
        {{ form_widget(form.Description,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Description'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"price\">Price:</label>
        {{ form_widget(form.Price,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Price'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"image\">Image</label>
        {{ form_widget(form.Image,{
            'attr':{
                'placeholder': 'Please select a picture'
            }
        }) }}
    </div>
    {#                    <div class=\"mt-md-2 flex-column buttons\">#}
    {#                        <a href=\"{{path('app_edit_manga',{'id':manga.id})}} \" class='btn btn-default'>Edit</a>#}
    {#                    </div>#}
    <input type=\"submit\" name=\"edit_product\" value=\"Edit\" class=\"btn btn-primary\"/>
    {{ form_end(form) }}

{% endblock %}", "product/edit.html.twig", "C:\\Users\\ADMIN\\HQTGiay\\templates\\product\\edit.html.twig");
    }
}
