<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e25fcc805e0568ffee2ef8fba17725a0de432b9115a772f1b7a63be0d2c3678e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72c34b94d3cc47d900e276cdb933597a81b4d4a8507edd56a2f4899929e5a4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c34b94d3cc47d900e276cdb933597a81b4d4a8507edd56a2f4899929e5a4e4->enter($__internal_72c34b94d3cc47d900e276cdb933597a81b4d4a8507edd56a2f4899929e5a4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_f0c387ab1106f7f38aac0860b740c856510163d799e712650ff46fc89403c43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c387ab1106f7f38aac0860b740c856510163d799e712650ff46fc89403c43f->enter($__internal_f0c387ab1106f7f38aac0860b740c856510163d799e712650ff46fc89403c43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c34b94d3cc47d900e276cdb933597a81b4d4a8507edd56a2f4899929e5a4e4->leave($__internal_72c34b94d3cc47d900e276cdb933597a81b4d4a8507edd56a2f4899929e5a4e4_prof);

        
        $__internal_f0c387ab1106f7f38aac0860b740c856510163d799e712650ff46fc89403c43f->leave($__internal_f0c387ab1106f7f38aac0860b740c856510163d799e712650ff46fc89403c43f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12683acf7377f0c5fe72f286dccb1d38bbdc41396b4b9b17ef7aa443a041e6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12683acf7377f0c5fe72f286dccb1d38bbdc41396b4b9b17ef7aa443a041e6b3->enter($__internal_12683acf7377f0c5fe72f286dccb1d38bbdc41396b4b9b17ef7aa443a041e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6aa092940d20155155ad1ec197638a9f1cd38725b02ca675c3eea8714c143da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa092940d20155155ad1ec197638a9f1cd38725b02ca675c3eea8714c143da1->enter($__internal_6aa092940d20155155ad1ec197638a9f1cd38725b02ca675c3eea8714c143da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6aa092940d20155155ad1ec197638a9f1cd38725b02ca675c3eea8714c143da1->leave($__internal_6aa092940d20155155ad1ec197638a9f1cd38725b02ca675c3eea8714c143da1_prof);

        
        $__internal_12683acf7377f0c5fe72f286dccb1d38bbdc41396b4b9b17ef7aa443a041e6b3->leave($__internal_12683acf7377f0c5fe72f286dccb1d38bbdc41396b4b9b17ef7aa443a041e6b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
