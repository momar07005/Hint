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
        $__internal_6ce4fb641d56edb46e7476e89cb655b28a24fe7fb867c3e820ba3f546f6b6945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce4fb641d56edb46e7476e89cb655b28a24fe7fb867c3e820ba3f546f6b6945->enter($__internal_6ce4fb641d56edb46e7476e89cb655b28a24fe7fb867c3e820ba3f546f6b6945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_9c0935d339a825000e6c4467dad5aa46c9ade3677403d3d4181b7dafa677db89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0935d339a825000e6c4467dad5aa46c9ade3677403d3d4181b7dafa677db89->enter($__internal_9c0935d339a825000e6c4467dad5aa46c9ade3677403d3d4181b7dafa677db89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_6ce4fb641d56edb46e7476e89cb655b28a24fe7fb867c3e820ba3f546f6b6945->leave($__internal_6ce4fb641d56edb46e7476e89cb655b28a24fe7fb867c3e820ba3f546f6b6945_prof);

        
        $__internal_9c0935d339a825000e6c4467dad5aa46c9ade3677403d3d4181b7dafa677db89->leave($__internal_9c0935d339a825000e6c4467dad5aa46c9ade3677403d3d4181b7dafa677db89_prof);

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
