<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_919fe88d3fe42d15fabf432e4244ceae0f2076b78b0dd3865229c125913f9a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82df2d2eb98f4d0baeb5d0287606b3e41900c25cc0bc61b4db6e2c557c1c7a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82df2d2eb98f4d0baeb5d0287606b3e41900c25cc0bc61b4db6e2c557c1c7a88->enter($__internal_82df2d2eb98f4d0baeb5d0287606b3e41900c25cc0bc61b4db6e2c557c1c7a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_98004d91ee9d6c0dd2e93f4401e2034aead7cfd62fe53ed0dac844d7d2d97933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98004d91ee9d6c0dd2e93f4401e2034aead7cfd62fe53ed0dac844d7d2d97933->enter($__internal_98004d91ee9d6c0dd2e93f4401e2034aead7cfd62fe53ed0dac844d7d2d97933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82df2d2eb98f4d0baeb5d0287606b3e41900c25cc0bc61b4db6e2c557c1c7a88->leave($__internal_82df2d2eb98f4d0baeb5d0287606b3e41900c25cc0bc61b4db6e2c557c1c7a88_prof);

        
        $__internal_98004d91ee9d6c0dd2e93f4401e2034aead7cfd62fe53ed0dac844d7d2d97933->leave($__internal_98004d91ee9d6c0dd2e93f4401e2034aead7cfd62fe53ed0dac844d7d2d97933_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_2481556cb3de9cd706a8d9befddc3d66d31751fa6a00156e924da434c8058458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2481556cb3de9cd706a8d9befddc3d66d31751fa6a00156e924da434c8058458->enter($__internal_2481556cb3de9cd706a8d9befddc3d66d31751fa6a00156e924da434c8058458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_25d4347ecb6fdacea13dac2858962e471fb3f930e10d693401ccad825b8af566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d4347ecb6fdacea13dac2858962e471fb3f930e10d693401ccad825b8af566->enter($__internal_25d4347ecb6fdacea13dac2858962e471fb3f930e10d693401ccad825b8af566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_25d4347ecb6fdacea13dac2858962e471fb3f930e10d693401ccad825b8af566->leave($__internal_25d4347ecb6fdacea13dac2858962e471fb3f930e10d693401ccad825b8af566_prof);

        
        $__internal_2481556cb3de9cd706a8d9befddc3d66d31751fa6a00156e924da434c8058458->leave($__internal_2481556cb3de9cd706a8d9befddc3d66d31751fa6a00156e924da434c8058458_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/login.html.twig");
    }
}
