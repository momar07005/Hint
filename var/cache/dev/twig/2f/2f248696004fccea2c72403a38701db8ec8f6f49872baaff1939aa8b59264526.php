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
        $__internal_ac8f1adbdf36c2347312e25a83784cdc8746cefaf815497ed3c09f21c8557eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8f1adbdf36c2347312e25a83784cdc8746cefaf815497ed3c09f21c8557eec->enter($__internal_ac8f1adbdf36c2347312e25a83784cdc8746cefaf815497ed3c09f21c8557eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_0a0f411c29051026c4c8ff52dcf16f57fec3f73d1d4b1efacadcf7f7b6f96223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0f411c29051026c4c8ff52dcf16f57fec3f73d1d4b1efacadcf7f7b6f96223->enter($__internal_0a0f411c29051026c4c8ff52dcf16f57fec3f73d1d4b1efacadcf7f7b6f96223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_ac8f1adbdf36c2347312e25a83784cdc8746cefaf815497ed3c09f21c8557eec->leave($__internal_ac8f1adbdf36c2347312e25a83784cdc8746cefaf815497ed3c09f21c8557eec_prof);

        
        $__internal_0a0f411c29051026c4c8ff52dcf16f57fec3f73d1d4b1efacadcf7f7b6f96223->leave($__internal_0a0f411c29051026c4c8ff52dcf16f57fec3f73d1d4b1efacadcf7f7b6f96223_prof);

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
