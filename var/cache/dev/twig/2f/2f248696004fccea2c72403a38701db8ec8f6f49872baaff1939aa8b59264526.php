<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9400f4b98e03bfd249361538da0258023286ed98989e928238dcb37f0a400482 extends Twig_Template
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
        $__internal_7db0e9d152b6db8c7880b951bd37e4a82ed09e894c6a81d2991461236dd1deb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db0e9d152b6db8c7880b951bd37e4a82ed09e894c6a81d2991461236dd1deb3->enter($__internal_7db0e9d152b6db8c7880b951bd37e4a82ed09e894c6a81d2991461236dd1deb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_4f424837490b347769507c881b363e3db8a3df10bfb264d74dc2a2c57e67c272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f424837490b347769507c881b363e3db8a3df10bfb264d74dc2a2c57e67c272->enter($__internal_4f424837490b347769507c881b363e3db8a3df10bfb264d74dc2a2c57e67c272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_7db0e9d152b6db8c7880b951bd37e4a82ed09e894c6a81d2991461236dd1deb3->leave($__internal_7db0e9d152b6db8c7880b951bd37e4a82ed09e894c6a81d2991461236dd1deb3_prof);

        
        $__internal_4f424837490b347769507c881b363e3db8a3df10bfb264d74dc2a2c57e67c272->leave($__internal_4f424837490b347769507c881b363e3db8a3df10bfb264d74dc2a2c57e67c272_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}

", "FOSUserBundle:Registration:register_content.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
