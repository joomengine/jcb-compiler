```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Templatelayout**
> extends: ****
```uml
@startuml
class Data  #Gold {
  # Config $config
  # LayoutData $layoutdata
  # TemplateData $templatedata
  # Aliasdata $aliasdata
  + __construct(Config $config, LayoutData $layoutdata, ...)
  + set(string $content, string $view, ...) : bool
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    LayoutData $layoutdata
    TemplateData $templatedata
    Aliasdata $aliasdata
end note

note right of Data::set
  Set Template and Layout Data

  since: 3.2.0
  return: bool
  
  arguments:
    string $content
    string $view
    bool $found = false
    array $templates = []
    array $layouts = []
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

