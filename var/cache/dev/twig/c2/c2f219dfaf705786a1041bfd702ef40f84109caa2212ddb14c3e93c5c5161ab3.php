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
        $__internal_81f0c21780a09cd2150712d01702c87eb4c7133c6725141d77818d0adcf09d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f0c21780a09cd2150712d01702c87eb4c7133c6725141d77818d0adcf09d0b->enter($__internal_81f0c21780a09cd2150712d01702c87eb4c7133c6725141d77818d0adcf09d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a047bc50d76148c4d7f3b2c491b1872b1e8711412d907549f1cffe724f721b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a047bc50d76148c4d7f3b2c491b1872b1e8711412d907549f1cffe724f721b58->enter($__internal_a047bc50d76148c4d7f3b2c491b1872b1e8711412d907549f1cffe724f721b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81f0c21780a09cd2150712d01702c87eb4c7133c6725141d77818d0adcf09d0b->leave($__internal_81f0c21780a09cd2150712d01702c87eb4c7133c6725141d77818d0adcf09d0b_prof);

        
        $__internal_a047bc50d76148c4d7f3b2c491b1872b1e8711412d907549f1cffe724f721b58->leave($__internal_a047bc50d76148c4d7f3b2c491b1872b1e8711412d907549f1cffe724f721b58_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d26ddcbc1f857b2e1ebf52a6a248ef865eca0dd3c9f5578f3c6df3444f73b770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26ddcbc1f857b2e1ebf52a6a248ef865eca0dd3c9f5578f3c6df3444f73b770->enter($__internal_d26ddcbc1f857b2e1ebf52a6a248ef865eca0dd3c9f5578f3c6df3444f73b770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fd22260d13b529315d1b0bf95f865e01f9951755b6e4de84d5e86de1fb7b582d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd22260d13b529315d1b0bf95f865e01f9951755b6e4de84d5e86de1fb7b582d->enter($__internal_fd22260d13b529315d1b0bf95f865e01f9951755b6e4de84d5e86de1fb7b582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fd22260d13b529315d1b0bf95f865e01f9951755b6e4de84d5e86de1fb7b582d->leave($__internal_fd22260d13b529315d1b0bf95f865e01f9951755b6e4de84d5e86de1fb7b582d_prof);

        
        $__internal_d26ddcbc1f857b2e1ebf52a6a248ef865eca0dd3c9f5578f3c6df3444f73b770->leave($__internal_d26ddcbc1f857b2e1ebf52a6a248ef865eca0dd3c9f5578f3c6df3444f73b770_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78ec9c2dc9372ec5612e8621049cc71bdc69c2ac446eb84f5852c439e1674b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ec9c2dc9372ec5612e8621049cc71bdc69c2ac446eb84f5852c439e1674b9c->enter($__internal_78ec9c2dc9372ec5612e8621049cc71bdc69c2ac446eb84f5852c439e1674b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9d4bfc5f269f1b1de8cc4daa77a9c25098fbad7105d0b4aee6cd12e1b51f2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d4bfc5f269f1b1de8cc4daa77a9c25098fbad7105d0b4aee6cd12e1b51f2d7->enter($__internal_f9d4bfc5f269f1b1de8cc4daa77a9c25098fbad7105d0b4aee6cd12e1b51f2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_f9d4bfc5f269f1b1de8cc4daa77a9c25098fbad7105d0b4aee6cd12e1b51f2d7->leave($__internal_f9d4bfc5f269f1b1de8cc4daa77a9c25098fbad7105d0b4aee6cd12e1b51f2d7_prof);

        
        $__internal_78ec9c2dc9372ec5612e8621049cc71bdc69c2ac446eb84f5852c439e1674b9c->leave($__internal_78ec9c2dc9372ec5612e8621049cc71bdc69c2ac446eb84f5852c439e1674b9c_prof);

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
