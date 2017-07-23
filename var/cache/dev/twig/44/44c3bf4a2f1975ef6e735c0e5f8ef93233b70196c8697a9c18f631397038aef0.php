<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a210c235e7e7eb8a6aa14b9e576e4fd2f629f4c681f5f1180b4e628237ff9c4c extends Twig_Template
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
        $__internal_174f3345ba80cac8a580776a0b438a9868e8d4cac50fbada866f4195911bb89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174f3345ba80cac8a580776a0b438a9868e8d4cac50fbada866f4195911bb89b->enter($__internal_174f3345ba80cac8a580776a0b438a9868e8d4cac50fbada866f4195911bb89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_431228b1bab4cd05a63d8b79a7b361b65ab14c1fb8a2558c37cccdaaeabd20b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431228b1bab4cd05a63d8b79a7b361b65ab14c1fb8a2558c37cccdaaeabd20b1->enter($__internal_431228b1bab4cd05a63d8b79a7b361b65ab14c1fb8a2558c37cccdaaeabd20b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_174f3345ba80cac8a580776a0b438a9868e8d4cac50fbada866f4195911bb89b->leave($__internal_174f3345ba80cac8a580776a0b438a9868e8d4cac50fbada866f4195911bb89b_prof);

        
        $__internal_431228b1bab4cd05a63d8b79a7b361b65ab14c1fb8a2558c37cccdaaeabd20b1->leave($__internal_431228b1bab4cd05a63d8b79a7b361b65ab14c1fb8a2558c37cccdaaeabd20b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
