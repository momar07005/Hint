<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c333bae1b1a34d7ff8ac18ee5e86cf0621d23cadcbf52a4a8ab7c81adee25f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/index.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_54e8b73ee0736d753596655bced423e31fa66e9a4798cb860d11ddd5b5bcac5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e8b73ee0736d753596655bced423e31fa66e9a4798cb860d11ddd5b5bcac5a->enter($__internal_54e8b73ee0736d753596655bced423e31fa66e9a4798cb860d11ddd5b5bcac5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_4dc3eae61736064bebd250b68eb22a6ae0d1e99f7039f5f7f3416cc95794afa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc3eae61736064bebd250b68eb22a6ae0d1e99f7039f5f7f3416cc95794afa4->enter($__internal_4dc3eae61736064bebd250b68eb22a6ae0d1e99f7039f5f7f3416cc95794afa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e8b73ee0736d753596655bced423e31fa66e9a4798cb860d11ddd5b5bcac5a->leave($__internal_54e8b73ee0736d753596655bced423e31fa66e9a4798cb860d11ddd5b5bcac5a_prof);

        
        $__internal_4dc3eae61736064bebd250b68eb22a6ae0d1e99f7039f5f7f3416cc95794afa4->leave($__internal_4dc3eae61736064bebd250b68eb22a6ae0d1e99f7039f5f7f3416cc95794afa4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_90947346dce5472608952bc2fa127c11ba2a1e6578ba2ba16be2610f93f0a257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90947346dce5472608952bc2fa127c11ba2a1e6578ba2ba16be2610f93f0a257->enter($__internal_90947346dce5472608952bc2fa127c11ba2a1e6578ba2ba16be2610f93f0a257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87c487474169413f627b0cd3425bbee60107d015d02c7ac0ee5d617ae3bf9e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c487474169413f627b0cd3425bbee60107d015d02c7ac0ee5d617ae3bf9e30->enter($__internal_87c487474169413f627b0cd3425bbee60107d015d02c7ac0ee5d617ae3bf9e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_87c487474169413f627b0cd3425bbee60107d015d02c7ac0ee5d617ae3bf9e30->leave($__internal_87c487474169413f627b0cd3425bbee60107d015d02c7ac0ee5d617ae3bf9e30_prof);

        
        $__internal_90947346dce5472608952bc2fa127c11ba2a1e6578ba2ba16be2610f93f0a257->leave($__internal_90947346dce5472608952bc2fa127c11ba2a1e6578ba2ba16be2610f93f0a257_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47713da78f49daf22546574b04c41cbabc7fc242370cfaee037bea3958457d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47713da78f49daf22546574b04c41cbabc7fc242370cfaee037bea3958457d66->enter($__internal_47713da78f49daf22546574b04c41cbabc7fc242370cfaee037bea3958457d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcb18b9dafbc89800e382e2acae9e54598fa2418dc8f2e3a00c3e6f446293b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb18b9dafbc89800e382e2acae9e54598fa2418dc8f2e3a00c3e6f446293b2d->enter($__internal_dcb18b9dafbc89800e382e2acae9e54598fa2418dc8f2e3a00c3e6f446293b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_dcb18b9dafbc89800e382e2acae9e54598fa2418dc8f2e3a00c3e6f446293b2d->leave($__internal_dcb18b9dafbc89800e382e2acae9e54598fa2418dc8f2e3a00c3e6f446293b2d_prof);

        
        $__internal_47713da78f49daf22546574b04c41cbabc7fc242370cfaee037bea3958457d66->leave($__internal_47713da78f49daf22546574b04c41cbabc7fc242370cfaee037bea3958457d66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
", "FOSUserBundle::layout.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
