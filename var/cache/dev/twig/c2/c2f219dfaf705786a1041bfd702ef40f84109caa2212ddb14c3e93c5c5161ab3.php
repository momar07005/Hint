<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c333bae1b1a34d7ff8ac18ee5e86cf0621d23cadcbf52a4a8ab7c81adee25f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/index.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_210504ee26b0be5ea47db6b32f2da9edd9dd8a377b359fbf13a24835fd800277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210504ee26b0be5ea47db6b32f2da9edd9dd8a377b359fbf13a24835fd800277->enter($__internal_210504ee26b0be5ea47db6b32f2da9edd9dd8a377b359fbf13a24835fd800277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_4c54f19d21b433c51114e86d36f3c2e61c7d8a3f1d516287c6247ced17f70e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c54f19d21b433c51114e86d36f3c2e61c7d8a3f1d516287c6247ced17f70e61->enter($__internal_4c54f19d21b433c51114e86d36f3c2e61c7d8a3f1d516287c6247ced17f70e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_210504ee26b0be5ea47db6b32f2da9edd9dd8a377b359fbf13a24835fd800277->leave($__internal_210504ee26b0be5ea47db6b32f2da9edd9dd8a377b359fbf13a24835fd800277_prof);

        
        $__internal_4c54f19d21b433c51114e86d36f3c2e61c7d8a3f1d516287c6247ced17f70e61->leave($__internal_4c54f19d21b433c51114e86d36f3c2e61c7d8a3f1d516287c6247ced17f70e61_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_bed903f9654d812682c444337b7fc178c20ea4572141d9cad50fd8d234ab9fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed903f9654d812682c444337b7fc178c20ea4572141d9cad50fd8d234ab9fd7->enter($__internal_bed903f9654d812682c444337b7fc178c20ea4572141d9cad50fd8d234ab9fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2440c02c326b90645995c0d34302812f39bb227c43a25235b992079810513e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2440c02c326b90645995c0d34302812f39bb227c43a25235b992079810513e52->enter($__internal_2440c02c326b90645995c0d34302812f39bb227c43a25235b992079810513e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 5
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 6
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 7
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        <div>
            ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "        </div>
    </script>
    ";
        
        $__internal_2440c02c326b90645995c0d34302812f39bb227c43a25235b992079810513e52->leave($__internal_2440c02c326b90645995c0d34302812f39bb227c43a25235b992079810513e52_prof);

        
        $__internal_bed903f9654d812682c444337b7fc178c20ea4572141d9cad50fd8d234ab9fd7->leave($__internal_bed903f9654d812682c444337b7fc178c20ea4572141d9cad50fd8d234ab9fd7_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b95dadc7375515e603ddd73515bc44091e2decb2e4985f703c7c04905579cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b95dadc7375515e603ddd73515bc44091e2decb2e4985f703c7c04905579cb4->enter($__internal_5b95dadc7375515e603ddd73515bc44091e2decb2e4985f703c7c04905579cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f00d2887b20b3ec839f0cdd2a134531736f0eadc8a99afa94fbe7dc71fbf0eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00d2887b20b3ec839f0cdd2a134531736f0eadc8a99afa94fbe7dc71fbf0eb9->enter($__internal_f00d2887b20b3ec839f0cdd2a134531736f0eadc8a99afa94fbe7dc71fbf0eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_f00d2887b20b3ec839f0cdd2a134531736f0eadc8a99afa94fbe7dc71fbf0eb9->leave($__internal_f00d2887b20b3ec839f0cdd2a134531736f0eadc8a99afa94fbe7dc71fbf0eb9_prof);

        
        $__internal_5b95dadc7375515e603ddd73515bc44091e2decb2e4985f703c7c04905579cb4->leave($__internal_5b95dadc7375515e603ddd73515bc44091e2decb2e4985f703c7c04905579cb4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 15,  104 => 14,  92 => 16,  90 => 14,  86 => 12,  83 => 11,  77 => 10,  68 => 7,  63 => 6,  58 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::default/index.html.twig\" %}
   {% block content %}
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </script>
    {% endblock %}
", "@FOSUser/layout.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
