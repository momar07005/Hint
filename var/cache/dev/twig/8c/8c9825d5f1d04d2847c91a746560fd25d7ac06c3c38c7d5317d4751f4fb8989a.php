<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_000d820c68735c7cce697d80db7c211472e86865067078be35a5255d53e65bd2 extends Twig_Template
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
        $__internal_70590f114f6b154278f032090fe8da1e1690927b96c80ffb5e84f34851556f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70590f114f6b154278f032090fe8da1e1690927b96c80ffb5e84f34851556f97->enter($__internal_70590f114f6b154278f032090fe8da1e1690927b96c80ffb5e84f34851556f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2bad5164ca849635a03d467a00bb3243afc737c21c50794a5ce93f96d6f9783d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bad5164ca849635a03d467a00bb3243afc737c21c50794a5ce93f96d6f9783d->enter($__internal_2bad5164ca849635a03d467a00bb3243afc737c21c50794a5ce93f96d6f9783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_70590f114f6b154278f032090fe8da1e1690927b96c80ffb5e84f34851556f97->leave($__internal_70590f114f6b154278f032090fe8da1e1690927b96c80ffb5e84f34851556f97_prof);

        
        $__internal_2bad5164ca849635a03d467a00bb3243afc737c21c50794a5ce93f96d6f9783d->leave($__internal_2bad5164ca849635a03d467a00bb3243afc737c21c50794a5ce93f96d6f9783d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
