<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7687bb1c1c6aa511a4d6f4947d6fc43df0e4d28db4aa53199e73850c9ab26c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ef03c85305d790cfdce35daeec9e27746a85d0978e6702d65b396c636f9f2930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef03c85305d790cfdce35daeec9e27746a85d0978e6702d65b396c636f9f2930->enter($__internal_ef03c85305d790cfdce35daeec9e27746a85d0978e6702d65b396c636f9f2930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_660e99718cae593d95c28c369c928c496ca8306dbeb3bd8617984d4828b9df03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660e99718cae593d95c28c369c928c496ca8306dbeb3bd8617984d4828b9df03->enter($__internal_660e99718cae593d95c28c369c928c496ca8306dbeb3bd8617984d4828b9df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef03c85305d790cfdce35daeec9e27746a85d0978e6702d65b396c636f9f2930->leave($__internal_ef03c85305d790cfdce35daeec9e27746a85d0978e6702d65b396c636f9f2930_prof);

        
        $__internal_660e99718cae593d95c28c369c928c496ca8306dbeb3bd8617984d4828b9df03->leave($__internal_660e99718cae593d95c28c369c928c496ca8306dbeb3bd8617984d4828b9df03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d691f719cb30f165dab7a4decd2dd07ddad6398aff5f436009a4cc4823cc0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d691f719cb30f165dab7a4decd2dd07ddad6398aff5f436009a4cc4823cc0bf->enter($__internal_7d691f719cb30f165dab7a4decd2dd07ddad6398aff5f436009a4cc4823cc0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1060714e3a04f6891531775e02da927dbbb3b7502279369a74fce31e620cc577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1060714e3a04f6891531775e02da927dbbb3b7502279369a74fce31e620cc577->enter($__internal_1060714e3a04f6891531775e02da927dbbb3b7502279369a74fce31e620cc577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1060714e3a04f6891531775e02da927dbbb3b7502279369a74fce31e620cc577->leave($__internal_1060714e3a04f6891531775e02da927dbbb3b7502279369a74fce31e620cc577_prof);

        
        $__internal_7d691f719cb30f165dab7a4decd2dd07ddad6398aff5f436009a4cc4823cc0bf->leave($__internal_7d691f719cb30f165dab7a4decd2dd07ddad6398aff5f436009a4cc4823cc0bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
