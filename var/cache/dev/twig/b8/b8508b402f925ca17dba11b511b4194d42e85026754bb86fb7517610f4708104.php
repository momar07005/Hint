<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_8792d7d9c2681d706f123453791874520c0c22866f801e895bf71779ab7f6fa6 extends Twig_Template
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
        $__internal_89bc21ec26ef23f67bb958f7fb67fdb0d54e1f3889bced169c7ece5e631a7f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89bc21ec26ef23f67bb958f7fb67fdb0d54e1f3889bced169c7ece5e631a7f94->enter($__internal_89bc21ec26ef23f67bb958f7fb67fdb0d54e1f3889bced169c7ece5e631a7f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_8f89de2a4dce4a440895580eaee13f44f8feea086c816cf395eaeb48295d437d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f89de2a4dce4a440895580eaee13f44f8feea086c816cf395eaeb48295d437d->enter($__internal_8f89de2a4dce4a440895580eaee13f44f8feea086c816cf395eaeb48295d437d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_89bc21ec26ef23f67bb958f7fb67fdb0d54e1f3889bced169c7ece5e631a7f94->leave($__internal_89bc21ec26ef23f67bb958f7fb67fdb0d54e1f3889bced169c7ece5e631a7f94_prof);

        
        $__internal_8f89de2a4dce4a440895580eaee13f44f8feea086c816cf395eaeb48295d437d->leave($__internal_8f89de2a4dce4a440895580eaee13f44f8feea086c816cf395eaeb48295d437d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
