```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Header (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\JoomlaThree**

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
  + __construct(Config $config, Event $event, ...)
  + get(string $context, string $codeName) : string
  # getHeaders(string $context) : array
  # setHelperClassHeader(array $headers, string $target_client) : void
  # setChosenMultiSelectionHeaders(array $headers, string $nameListCode) : void
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

note right of Header::setHelperClassHeader
  set Helper Dynamic Headers

  since: 3.2.0
  return: void
end note

note right of Header::setChosenMultiSelectionHeaders
  Build chosen multi selection headers for the view

  since: 3.2.0
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---7b56a097_9979_477b_b18a_c9dfc2f1e13b---Power
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

