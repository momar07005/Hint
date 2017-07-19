<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_97d85ca10ebf31168253ee67d9dcbcf26b7ee153f124ec2f83a1e73f952dd6d5 extends Twig_Template
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
        $__internal_82b7aa2ba3afe78f833d1b03f24a7063193384a4f68dce1b7bcfeff009f74937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b7aa2ba3afe78f833d1b03f24a7063193384a4f68dce1b7bcfeff009f74937->enter($__internal_82b7aa2ba3afe78f833d1b03f24a7063193384a4f68dce1b7bcfeff009f74937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b44c97cc6c1cab61023478bde8c5aada0c4b4ab76774deb1f96e23d323d27808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44c97cc6c1cab61023478bde8c5aada0c4b4ab76774deb1f96e23d323d27808->enter($__internal_b44c97cc6c1cab61023478bde8c5aada0c4b4ab76774deb1f96e23d323d27808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_82b7aa2ba3afe78f833d1b03f24a7063193384a4f68dce1b7bcfeff009f74937->leave($__internal_82b7aa2ba3afe78f833d1b03f24a7063193384a4f68dce1b7bcfeff009f74937_prof);

        
        $__internal_b44c97cc6c1cab61023478bde8c5aada0c4b4ab76774deb1f96e23d323d27808->leave($__internal_b44c97cc6c1cab61023478bde8c5aada0c4b4ab76774deb1f96e23d323d27808_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
