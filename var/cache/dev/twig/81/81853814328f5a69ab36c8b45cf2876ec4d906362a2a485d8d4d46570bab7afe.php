<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_d0bb4a0a442cc3fbfd8d8efc6f30b089b3857f3be8c39ae8f5c164d2a4350291 extends Twig_Template
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
        $__internal_9c04e4e13a75b137abec1b34b4ff49b57e3f21c0c46b992e47069940d90b982e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c04e4e13a75b137abec1b34b4ff49b57e3f21c0c46b992e47069940d90b982e->enter($__internal_9c04e4e13a75b137abec1b34b4ff49b57e3f21c0c46b992e47069940d90b982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_b3a1693179d1f4a071def60cfaeed8d7a9c522f68df21694a4e8a10c1dec4388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a1693179d1f4a071def60cfaeed8d7a9c522f68df21694a4e8a10c1dec4388->enter($__internal_b3a1693179d1f4a071def60cfaeed8d7a9c522f68df21694a4e8a10c1dec4388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9c04e4e13a75b137abec1b34b4ff49b57e3f21c0c46b992e47069940d90b982e->leave($__internal_9c04e4e13a75b137abec1b34b4ff49b57e3f21c0c46b992e47069940d90b982e_prof);

        
        $__internal_b3a1693179d1f4a071def60cfaeed8d7a9c522f68df21694a4e8a10c1dec4388->leave($__internal_b3a1693179d1f4a071def60cfaeed8d7a9c522f68df21694a4e8a10c1dec4388_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
