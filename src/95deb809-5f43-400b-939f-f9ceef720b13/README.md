```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Header (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\JoomlaFive**

```uml
@startuml
class Header << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Event $event
  # Placeholder $placeholder
  # Language $language
  # UikitComp $uikitcomp
  # AdminFilterType $adminfiltertype
  # Category $category
  # AccessSwitchList $accessswitchlist
  # Filter $filter
  # Tags $tags
  # array $headers
  # string $NamespacePrefix
  # string $ComponentName
  # string $ComponentNamespace
  + __construct(Config $config, Event $event, ...)
  + get(string $context, string $codeName) : string
  # getHeaders(string $context) : array
}

note right of Header::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Event $event
    Placeholder $placeholder
    Language $language
    UikitComp $uikitcomp
    AdminFilterType $adminfiltertype
    Category $category
    AccessSwitchList $accessswitchlist
    Filter $filter
    Tags $tags
end note

note right of Header::get
  Get the headers for a file

  since: 3.2.0
  return: string
end note

note right of Header::getHeaders
  Get the headers for a file

  since: 3.2.0
  return: array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---95deb809_5f43_400b_939f_f9ceef720b13---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

