lib.fluidContent {
    templateRootPaths {
        200 = EXT:media_test/Resources/Private/Templates/
    }
}
tt_content {
    mediatest_jumbotron < lib.fluidContent
    mediatest_jumbotron {
        templateName = Jumbotron.html
    }
}