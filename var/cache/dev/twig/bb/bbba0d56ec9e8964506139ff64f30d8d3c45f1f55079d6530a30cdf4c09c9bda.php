<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_363930749dca215727a8a620184233a5e18f3a03ad3068ddf612473d53cf930d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1f9a6e0f8078d1025ccef6ace0a85c5f60997106b1de3d9a75367c65e627197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f9a6e0f8078d1025ccef6ace0a85c5f60997106b1de3d9a75367c65e627197->enter($__internal_c1f9a6e0f8078d1025ccef6ace0a85c5f60997106b1de3d9a75367c65e627197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_7eb4967aa072ef1e2aa52a6ee88708afbbc4ad76b417d7a584a4a5a657abb63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb4967aa072ef1e2aa52a6ee88708afbbc4ad76b417d7a584a4a5a657abb63b->enter($__internal_7eb4967aa072ef1e2aa52a6ee88708afbbc4ad76b417d7a584a4a5a657abb63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c1f9a6e0f8078d1025ccef6ace0a85c5f60997106b1de3d9a75367c65e627197->leave($__internal_c1f9a6e0f8078d1025ccef6ace0a85c5f60997106b1de3d9a75367c65e627197_prof);

        
        $__internal_7eb4967aa072ef1e2aa52a6ee88708afbbc4ad76b417d7a584a4a5a657abb63b->leave($__internal_7eb4967aa072ef1e2aa52a6ee88708afbbc4ad76b417d7a584a4a5a657abb63b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
