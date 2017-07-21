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
        $__internal_f3d510cdc105ec1b1871df39bb32f245d3d01780542304ed94cf1f0c678f5380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d510cdc105ec1b1871df39bb32f245d3d01780542304ed94cf1f0c678f5380->enter($__internal_f3d510cdc105ec1b1871df39bb32f245d3d01780542304ed94cf1f0c678f5380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_4910136f1f145e8d7de7c777ca8d6a7cf6d3587bf7fbebadf1031ff7506cc708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4910136f1f145e8d7de7c777ca8d6a7cf6d3587bf7fbebadf1031ff7506cc708->enter($__internal_4910136f1f145e8d7de7c777ca8d6a7cf6d3587bf7fbebadf1031ff7506cc708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d510cdc105ec1b1871df39bb32f245d3d01780542304ed94cf1f0c678f5380->leave($__internal_f3d510cdc105ec1b1871df39bb32f245d3d01780542304ed94cf1f0c678f5380_prof);

        
        $__internal_4910136f1f145e8d7de7c777ca8d6a7cf6d3587bf7fbebadf1031ff7506cc708->leave($__internal_4910136f1f145e8d7de7c777ca8d6a7cf6d3587bf7fbebadf1031ff7506cc708_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b95dd39c2c1e6d86b48044f2e487fb9c9325740595e7d238b22165d8ae2e5794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95dd39c2c1e6d86b48044f2e487fb9c9325740595e7d238b22165d8ae2e5794->enter($__internal_b95dd39c2c1e6d86b48044f2e487fb9c9325740595e7d238b22165d8ae2e5794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6dabcf9f834acef3430af953bc72bbc0e9470f0965ae25c9b09d61b0a6fdd7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dabcf9f834acef3430af953bc72bbc0e9470f0965ae25c9b09d61b0a6fdd7a2->enter($__internal_6dabcf9f834acef3430af953bc72bbc0e9470f0965ae25c9b09d61b0a6fdd7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6dabcf9f834acef3430af953bc72bbc0e9470f0965ae25c9b09d61b0a6fdd7a2->leave($__internal_6dabcf9f834acef3430af953bc72bbc0e9470f0965ae25c9b09d61b0a6fdd7a2_prof);

        
        $__internal_b95dd39c2c1e6d86b48044f2e487fb9c9325740595e7d238b22165d8ae2e5794->leave($__internal_b95dd39c2c1e6d86b48044f2e487fb9c9325740595e7d238b22165d8ae2e5794_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
