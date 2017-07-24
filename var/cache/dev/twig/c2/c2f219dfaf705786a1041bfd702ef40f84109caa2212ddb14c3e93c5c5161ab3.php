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
        $__internal_ab7ff0ebbc8fe3f406390928030f5ebfad12eb4e611ae65bbd052e90047178db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7ff0ebbc8fe3f406390928030f5ebfad12eb4e611ae65bbd052e90047178db->enter($__internal_ab7ff0ebbc8fe3f406390928030f5ebfad12eb4e611ae65bbd052e90047178db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_43d196829ef64b34f2091db790755904a4b226aef216089757a782849204a90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d196829ef64b34f2091db790755904a4b226aef216089757a782849204a90e->enter($__internal_43d196829ef64b34f2091db790755904a4b226aef216089757a782849204a90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab7ff0ebbc8fe3f406390928030f5ebfad12eb4e611ae65bbd052e90047178db->leave($__internal_ab7ff0ebbc8fe3f406390928030f5ebfad12eb4e611ae65bbd052e90047178db_prof);

        
        $__internal_43d196829ef64b34f2091db790755904a4b226aef216089757a782849204a90e->leave($__internal_43d196829ef64b34f2091db790755904a4b226aef216089757a782849204a90e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a22227735d28c097f32205753b8d7895c47a3407e0ead783d78d9ad6c8de5fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22227735d28c097f32205753b8d7895c47a3407e0ead783d78d9ad6c8de5fe1->enter($__internal_a22227735d28c097f32205753b8d7895c47a3407e0ead783d78d9ad6c8de5fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fe0424bd08ff9b07ed59e34481e202a48f2f64f5327bf53770d4afe824b128f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0424bd08ff9b07ed59e34481e202a48f2f64f5327bf53770d4afe824b128f8->enter($__internal_fe0424bd08ff9b07ed59e34481e202a48f2f64f5327bf53770d4afe824b128f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fe0424bd08ff9b07ed59e34481e202a48f2f64f5327bf53770d4afe824b128f8->leave($__internal_fe0424bd08ff9b07ed59e34481e202a48f2f64f5327bf53770d4afe824b128f8_prof);

        
        $__internal_a22227735d28c097f32205753b8d7895c47a3407e0ead783d78d9ad6c8de5fe1->leave($__internal_a22227735d28c097f32205753b8d7895c47a3407e0ead783d78d9ad6c8de5fe1_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5039a7dcfa4a2152f3d83683abd6297caeeaa9f24c43092169a30ef0fa4f275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5039a7dcfa4a2152f3d83683abd6297caeeaa9f24c43092169a30ef0fa4f275->enter($__internal_d5039a7dcfa4a2152f3d83683abd6297caeeaa9f24c43092169a30ef0fa4f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf5be709ebced57dc84cf2efc7b533d38cf9633c2d2ea08ee96b95d77afdce31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5be709ebced57dc84cf2efc7b533d38cf9633c2d2ea08ee96b95d77afdce31->enter($__internal_cf5be709ebced57dc84cf2efc7b533d38cf9633c2d2ea08ee96b95d77afdce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_cf5be709ebced57dc84cf2efc7b533d38cf9633c2d2ea08ee96b95d77afdce31->leave($__internal_cf5be709ebced57dc84cf2efc7b533d38cf9633c2d2ea08ee96b95d77afdce31_prof);

        
        $__internal_d5039a7dcfa4a2152f3d83683abd6297caeeaa9f24c43092169a30ef0fa4f275->leave($__internal_d5039a7dcfa4a2152f3d83683abd6297caeeaa9f24c43092169a30ef0fa4f275_prof);

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
