```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class CustomFieldTypeFile (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class CustomFieldTypeFile << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Content $content
  # SiteField $sitefield
  # Placeholder $placeholder
  # Language $language
  # ComponentPlaceholder $componentplaceholder
  # Structure $structure
  # InputButton $inputbutton
  # FieldGroupControl $fieldgroupcontrol
  # ExtensionCustomFields $extensioncustomfields
  # CMSApplication $app
  # array $phpFieldArray
  + __construct(Config $config, Content $content, ...)
  + set(array $data, string $nameListCode, ...) : void
}

note right of CustomFieldTypeFile::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Content $content
    SiteField $sitefield
    Placeholder $placeholder
    Language $language
    ComponentPlaceholder $componentplaceholder
    Structure $structure
    InputButton $inputbutton
    FieldGroupControl $fieldgroupcontrol
    ExtensionCustomFields $extensioncustomfields
    ?CMSApplication $app = null
end note

note right of CustomFieldTypeFile::set
  set Custom Field Type File

  since: 3.2.0
  return: void
  
  arguments:
    array $data
    string $nameListCode
    string $nameSingleCode
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

