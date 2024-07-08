```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlamodule**
> extends: ****
```uml
@startuml
class Structure  #Gold {
  # Module $module
  # Component $component
  # Config $config
  # Registry $registry
  # Dispenser $dispenser
  # Event $event
  # Counter $counter
  # Folder $folder
  # File $file
  # Files $files
  # TemplateData $templatedata
  + __construct(Module $module, Component $component, ...)
  + build() : void
  # getXML(object $module) : string
  # getCustomScriptField(array $fieldScriptBucket) : string
  # modulePath(object $module) : void
  # setMainModFile(object $module) : void
  # setCustomGet(object $module) : void
  # setHelperFile(object $module) : void
  # setMainXmlFile(object $module) : void
  # setDefaultFile(object $module) : void
  # setTemplateFiles(object $module) : void
  # setInstallScript(object $module) : void
  # setReadme(object $module) : void
  # setCssJsForm(object $module) : void
  # setCssForm(object $module, string $targetPath, ...) : void
  # setJsForm(object $module, string $targetPath, ...) : void
  # setForms(object $module) : void
  # setSQL(object $module) : void
  # setFiles(object $module) : void
  # setFolders(object $module) : void
  # setUrls(object $module) : void
}

note right of Structure::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Module $module
    Component $component
    Config $config
    Registry $registry
    Dispenser $dispenser
    Event $event
    Counter $counter
    Folder $folder
    File $file
    Files $files
    TemplateData $templatedata
end note

note left of Structure::build
  Build the Modules files, folders, url's and config

  since: 3.2.0
  return: void
end note

note right of Structure::getXML
  get the module xml template

  since: 3.2.0
  return: string
end note

note left of Structure::getCustomScriptField
  get the module admin custom script field

  since: 3.2.0
  return: string
end note

note right of Structure::modulePath
  Set the module path

  since: 3.2.0
  return: void
end note

note left of Structure::setMainModFile
  Set the main module file

  since: 3.2.0
  return: void
end note

note right of Structure::setCustomGet
  Set the custom get file

  since: 3.2.0
  return: void
end note

note left of Structure::setHelperFile
  Set the helper file

  since: 3.2.0
  return: void
end note

note right of Structure::setMainXmlFile
  Set the main XML file

  since: 3.2.0
  return: void
end note

note left of Structure::setDefaultFile
  Set the main default template file

  since: 3.2.0
  return: void
end note

note right of Structure::setTemplateFiles
  Set the additional template files

  since: 3.2.0
  return: void
end note

note left of Structure::setInstallScript
  Set the install script file

  since: 3.2.0
  return: void
end note

note right of Structure::setReadme
  Set the readme file

  since: 3.2.0
  return: void
end note

note left of Structure::setCssJsForm
  Set the css and javascript in form

  since: 3.2.0
  return: void
end note

note right of Structure::setCssForm
  Set the css in form

  since: 3.2.0
  return: void
  
  arguments:
    object $module
    string $targetPath
    array $bucket
end note

note left of Structure::setJsForm
  Set the javascript in form

  since: 3.2.0
  return: void
  
  arguments:
    object $module
    string $targetPath
    array $bucket
end note

note right of Structure::setForms
  Set the form folders and files as needed

  since: 3.2.0
  return: void
end note

note left of Structure::setSQL
  Set the sql stuff

  since: 3.2.0
  return: void
end note

note right of Structure::setFiles
  Set the files

  since: 3.2.0
  return: void
end note

note left of Structure::setFolders
  Set the folders

  since: 3.2.0
  return: void
end note

note right of Structure::setUrls
  Set the urls

  since: 3.2.0
  return: void
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

