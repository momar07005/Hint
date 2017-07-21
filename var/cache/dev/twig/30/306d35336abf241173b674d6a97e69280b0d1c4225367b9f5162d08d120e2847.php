<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_63a78e45f285da395fc8a9af3344dd24563c7e334e44e148df4828b03e0f05ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_12c2403e855b50440fd131861ec79b07b33f9575e492cc93a5aeb98c95fdb79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c2403e855b50440fd131861ec79b07b33f9575e492cc93a5aeb98c95fdb79d->enter($__internal_12c2403e855b50440fd131861ec79b07b33f9575e492cc93a5aeb98c95fdb79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_88e8e3262ca6b2f864b812274ffcf327678821b59feeab718e945a3a911760de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e8e3262ca6b2f864b812274ffcf327678821b59feeab718e945a3a911760de->enter($__internal_88e8e3262ca6b2f864b812274ffcf327678821b59feeab718e945a3a911760de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c2403e855b50440fd131861ec79b07b33f9575e492cc93a5aeb98c95fdb79d->leave($__internal_12c2403e855b50440fd131861ec79b07b33f9575e492cc93a5aeb98c95fdb79d_prof);

        
        $__internal_88e8e3262ca6b2f864b812274ffcf327678821b59feeab718e945a3a911760de->leave($__internal_88e8e3262ca6b2f864b812274ffcf327678821b59feeab718e945a3a911760de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_980bb11b4c322f6df15ee90bfb8a4e05bce4333d97bb01db2471e253a0f5dac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980bb11b4c322f6df15ee90bfb8a4e05bce4333d97bb01db2471e253a0f5dac7->enter($__internal_980bb11b4c322f6df15ee90bfb8a4e05bce4333d97bb01db2471e253a0f5dac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6cd809e3cbe492d2d48d270ebf9cea734bd9fb4e23cc82dca4ae14ffa86b2d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd809e3cbe492d2d48d270ebf9cea734bd9fb4e23cc82dca4ae14ffa86b2d54->enter($__internal_6cd809e3cbe492d2d48d270ebf9cea734bd9fb4e23cc82dca4ae14ffa86b2d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6cd809e3cbe492d2d48d270ebf9cea734bd9fb4e23cc82dca4ae14ffa86b2d54->leave($__internal_6cd809e3cbe492d2d48d270ebf9cea734bd9fb4e23cc82dca4ae14ffa86b2d54_prof);

        
        $__internal_980bb11b4c322f6df15ee90bfb8a4e05bce4333d97bb01db2471e253a0f5dac7->leave($__internal_980bb11b4c322f6df15ee90bfb8a4e05bce4333d97bb01db2471e253a0f5dac7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
