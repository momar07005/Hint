<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4d85921b64ffb363dbf6ceeeb5a682f3268837fb15c3d16a0fcb385b24c75c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9d350bcd845e98a1eb0ff6d53a0bac4cef2d4e804b675606e0c411d4cdfbd9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d350bcd845e98a1eb0ff6d53a0bac4cef2d4e804b675606e0c411d4cdfbd9b0->enter($__internal_9d350bcd845e98a1eb0ff6d53a0bac4cef2d4e804b675606e0c411d4cdfbd9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_608e475bf8cca4c19026ddae432f0bd07846643efee366eabe723d67c54cce82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608e475bf8cca4c19026ddae432f0bd07846643efee366eabe723d67c54cce82->enter($__internal_608e475bf8cca4c19026ddae432f0bd07846643efee366eabe723d67c54cce82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d350bcd845e98a1eb0ff6d53a0bac4cef2d4e804b675606e0c411d4cdfbd9b0->leave($__internal_9d350bcd845e98a1eb0ff6d53a0bac4cef2d4e804b675606e0c411d4cdfbd9b0_prof);

        
        $__internal_608e475bf8cca4c19026ddae432f0bd07846643efee366eabe723d67c54cce82->leave($__internal_608e475bf8cca4c19026ddae432f0bd07846643efee366eabe723d67c54cce82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_062982ff256520b401782d4aa91f7b2c417eeb582041907849dab7374bc82c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062982ff256520b401782d4aa91f7b2c417eeb582041907849dab7374bc82c89->enter($__internal_062982ff256520b401782d4aa91f7b2c417eeb582041907849dab7374bc82c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_febbbb1a4861c5343e177f3b68c71e2ec5e606a3ed61e9c995ce51035a4044c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febbbb1a4861c5343e177f3b68c71e2ec5e606a3ed61e9c995ce51035a4044c5->enter($__internal_febbbb1a4861c5343e177f3b68c71e2ec5e606a3ed61e9c995ce51035a4044c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_febbbb1a4861c5343e177f3b68c71e2ec5e606a3ed61e9c995ce51035a4044c5->leave($__internal_febbbb1a4861c5343e177f3b68c71e2ec5e606a3ed61e9c995ce51035a4044c5_prof);

        
        $__internal_062982ff256520b401782d4aa91f7b2c417eeb582041907849dab7374bc82c89->leave($__internal_062982ff256520b401782d4aa91f7b2c417eeb582041907849dab7374bc82c89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
