<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_6d7293ee10c8b292354c28abe376587062ec212d92950df3b3d80bd8aca47a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c3f98a97d3c3d5a8e8ecf0b68705ed8a4184e98f46dbbd5c64713b0b00bef17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f98a97d3c3d5a8e8ecf0b68705ed8a4184e98f46dbbd5c64713b0b00bef17a->enter($__internal_c3f98a97d3c3d5a8e8ecf0b68705ed8a4184e98f46dbbd5c64713b0b00bef17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_923fd3d34baf515f1a701f8189373873da3e806a4143695ef8ef2925faab7711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923fd3d34baf515f1a701f8189373873da3e806a4143695ef8ef2925faab7711->enter($__internal_923fd3d34baf515f1a701f8189373873da3e806a4143695ef8ef2925faab7711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f98a97d3c3d5a8e8ecf0b68705ed8a4184e98f46dbbd5c64713b0b00bef17a->leave($__internal_c3f98a97d3c3d5a8e8ecf0b68705ed8a4184e98f46dbbd5c64713b0b00bef17a_prof);

        
        $__internal_923fd3d34baf515f1a701f8189373873da3e806a4143695ef8ef2925faab7711->leave($__internal_923fd3d34baf515f1a701f8189373873da3e806a4143695ef8ef2925faab7711_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adb8bfa45bd8fb1d010fcd6b3f83fc52028c71a6af40a710a831e13ccb917188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb8bfa45bd8fb1d010fcd6b3f83fc52028c71a6af40a710a831e13ccb917188->enter($__internal_adb8bfa45bd8fb1d010fcd6b3f83fc52028c71a6af40a710a831e13ccb917188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4194bc8903b66dd5e26becb83c2395e39fa84168af05567a25a60f87fb42374d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4194bc8903b66dd5e26becb83c2395e39fa84168af05567a25a60f87fb42374d->enter($__internal_4194bc8903b66dd5e26becb83c2395e39fa84168af05567a25a60f87fb42374d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4194bc8903b66dd5e26becb83c2395e39fa84168af05567a25a60f87fb42374d->leave($__internal_4194bc8903b66dd5e26becb83c2395e39fa84168af05567a25a60f87fb42374d_prof);

        
        $__internal_adb8bfa45bd8fb1d010fcd6b3f83fc52028c71a6af40a710a831e13ccb917188->leave($__internal_adb8bfa45bd8fb1d010fcd6b3f83fc52028c71a6af40a710a831e13ccb917188_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
